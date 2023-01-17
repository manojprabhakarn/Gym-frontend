window.onload = function() {
    fetch('/my-endpoint/')
      .then(response => response.json())
      .then(data => {
        // do something with the data
      })
      .catch(error => {
        console.error('Error:', error);
      });
  }