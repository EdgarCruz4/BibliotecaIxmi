const API_URL = window.location.origin.concat(
  "/bibliotecaixmi/backend/upload.php"
);

document.querySelector("#upload-file-form").addEventListener("submit", (e) => {
  e.preventDefault();
  const formData = new FormData(e.target);
  uploadFiles(formData);
});

function uploadFiles(formData) {
  document.querySelector("#progress-bar").style.display = "block";
  const psbar = document.querySelector("#upload-progress");
  psbar.style.width = "0%"; // set progress to 0%

  // Initiate the AJAX request
  let request = new XMLHttpRequest();
  // Ensure the request method is POST
  request.open("POST", API_URL);
  // Attach the progress event handler to the AJAX request
  request.upload.addEventListener("progress", (event) => {
    // Add the current progress to the button
    const ps = ((event.loaded / event.total) * 100).toFixed(2);
    psbar.style.width = `${ps}%`;
    // psbar.innerHTML = `${ps}%`;
  });

  request.onload = () => {
    if (request.readyState == 4 && request.status == 200) {
      // Output the response message
      let result = JSON.parse(request.responseText);
      for (const response of result) {
        // console.log(response);
        insert(response);
      }
      readDatabase();
    } else {
      $("#modal-upload-error").modal({
        show: true,
      });
    }
    setTimeout(() => {
      document.querySelector("#progress-bar").style.display = "none";
    }, 3000);
  };

  request.onerror = () => {
    $("#modal-upload-error").modal({
      show: true,
    });
  };
  // Execute request
  request.send(formData);
}

function insert(response) {
  var data = new FormData();
  data.append("function", "create");
  data.append("table", "archivos");
  data.append("nombre", response.file);
  data.append("archivo", "./src/archivos/".concat(response.file));
  data.append("id_biblioteca", 1);

  fetch(window.location.origin.concat("/bibliotecaixmi/backend/api.php"), {
    method: "POST", // *GET, POST, PUT, DELETE, etc.
    body: data, // body data type must match "Content-Type" header
  })
    .then((response) => response.json())
    .then((data) => {
      console.log(data);
    })
    .catch((error) => console.error(error));
}

document.querySelector("#btn-search").addEventListener("click", (e) => {
  readDatabase(true);
});

function readDatabase(search = false) {
  var formData = new FormData();
  if (!search) formData.append("function", "read");
  else {
    formData.append("function", "search");
    let text = document.querySelector("#in-search").value;
    formData.append("text", text);
    console.log(text);
  }

  let table = document.querySelector("#table-data");
  table.innerHTML = "";

  fetch(window.location.origin.concat("/bibliotecaixmi/backend/api.php"), {
    method: "POST", // *GET, POST, PUT, DELETE, etc.
    body: formData, // body data type must match "Content-Type" header
  })
    .then((response) => response.json())
    .then((data) => {
      for (const row of data) {
        table.innerHTML += `
<tr>
<td>
<div class="chk-option">
<label
class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
<input type="checkbox" class="custom-control-input">
<span class="custom-control-label"></span>
</label>
</div>
</td>
<td>${row.n}</td>
<td>
${row.f}
</td>
<td>
${row.b}
</td>
<td class="text-right">
<form method="POST" action="backend/download.php">
<button type="submit" class="btn btn-primary btn-sm btn-download">Descargar</button>
<input type="hidden" name="filename" value="${row.n}">
</form>
<button type="button" data-id="${row.i}"
data-name="${row.n}"
class="btn btn-danger btn-sm btn-delete">Eliminar</button>
</td>
</tr>
`;
      }

      document.querySelectorAll(".btn-delete").forEach((btn) => {
        btn.addEventListener("click", (e) => {
          e.preventDefault();
          let id_archivo = btn.getAttribute("data-id");
          let archivo = btn.getAttribute("data-name");
          if (!confirm("¿Borrar?")) return;

          var formData = new FormData();
          formData.append("function", "delete");
          formData.append("id_archivo", id_archivo);
          formData.append("filename", archivo);

          fetch(
            window.location.origin.concat("/bibliotecaixmi/backend/api.php"),
            {
              method: "POST", // *GET, POST, PUT, DELETE, etc.
              body: formData, // body data type must match "Content-Type" header
            }
          )
            .then((response) => response.json())
            .then((data) => {
              readDatabase();
            })
            .catch((error) => console.error(error));
        });
      });
    })
    .catch((error) => console.error(error));
}

readDatabase();
