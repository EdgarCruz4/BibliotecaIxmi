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
  request.open("POST", '../backend/upload.php');
  // Attach the progress event handler to the AJAX request
  request.upload.addEventListener("progress", (event) => {
    // Add the current progress to the button
    const ps = ((event.loaded / event.total) * 100).toFixed(2);
    psbar.style.width = `${ps}%`;
    // psbar.innerHTML = `${ps}%`;
  });

  request.onload = async () => {
    if (request.readyState === XMLHttpRequest.DONE && request.status === 200) {
      // Output the response message
      let result = JSON.parse(request.responseText);
      formData.delete('files[]');
      for (const response of result) {
        // console.log(response);
        await insert(formData, response);
      }
      window.location.replace(window.location.href);
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

async function insert(formData, response) {
  formData.append("function", "create");
  formData.append("table", "archivos");
  formData.append("nombre", response.file);
  formData.append("archivo", "src/archivos/".concat(response.file));

  await fetch("../backend/api.php",
    {
      method: "POST", // *GET, POST, PUT, DELETE, etc.
      body: formData, // body data type must match "Content-Type" header
    }
  )
    .then((response) => response?.json())
    .then((response) => {
      console.log(response);
      return response?.status === 'ok';
    })
    .catch((error) => {
      console.error(error);
      return false;
    });
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

    fetch('../backend/api.php',
      {
        method: "POST", // *GET, POST, PUT, DELETE, etc.
        body: formData, // body data type must match "Content-Type" header
      }
    )
    .then((response) => response.json())
    .then((data) => {
        window.location.replace(window.location.href);
      })
    .catch((error) => console.error(error));
  });
});