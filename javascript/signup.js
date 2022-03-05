const form = document.querySelector('.signup form')
const continueBtn = document.querySelector('.button input');

const errorTxt = document.querySelector('.error-text');

const formSubmit = (e) => {
  e.preventDefault();

}

form.addEventListener('submit', formSubmit)

const startAjax = () => {
  let xhr = new XMLHttpRequest();
  xhr.open('POST', 'php/signup.php', true);
  xhr.onload = () => {
    if(xhr.readyState === XMLHttpRequest.DONE){
      if(xhr.status === 200){
        let data = xhr.response;
        console.log(data)
        if(data === 'success'){
          errorTxt.textContent = data;
          errorTxt.style.display = 'block';
        }else{

        }
      }
    }
  }
  let formData = new FormData(form);
  xhr.send(formData);
};

continueBtn.addEventListener('click', startAjax)