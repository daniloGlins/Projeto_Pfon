const checkboxPessoaFisica = document.getElementById('caixinha-pessoa-fisica');
const checkboxPessoaJuridica = document.getElementById('caixinha-pessoa-juridica');

checkboxPessoaFisica.addEventListener('change', function() {
  if (this.checked) {
    checkboxPessoaJuridica.disabled = true;
  } else {
    checkboxPessoaJuridica.disabled = false;
  }
});

checkboxPessoaJuridica.addEventListener('change', function() {
  if (this.checked) {
    checkboxPessoaFisica.disabled = true;
  } else {
    checkboxPessoaFisica.disabled = false;
  }
});
