// main.js - UI enhancements and form validation for the Data Mobil system

document.addEventListener('DOMContentLoaded', () => {
  // Delete confirmation for links with class "hapus"
  const deleteLinks = document.querySelectorAll('a.hapus');
  deleteLinks.forEach(link => {
    link.addEventListener('click', event => {
      if (!confirm('Apakah Anda yakin ingin menghapus data ini?')) {
        event.preventDefault();
      }
    });
  });

  // Form validation for input and edit forms
  const forms = document.querySelectorAll('form');
  forms.forEach(form => {
    form.addEventListener('submit', event => {
      const inputs = form.querySelectorAll('input[type="text"]');
      let valid = true;
      let message = '';

      inputs.forEach(input => {
        if (!input.value.trim()) {
          valid = false;
          message = 'Semua kolom harus diisi dengan benar.';
        }
      });

      if (!valid) {
        event.preventDefault();
        alert(message);
      }
    });
  });


});

