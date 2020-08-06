//load
window.addEventListener("load", function(event) {
    document.querySelector('.am').innerHTML = '113 - js load-all';
  });
window.addEventListener("DOMContentLoaded", function(event) {
    let block = document.querySelector('.am');
    let inputProduct = document.querySelectorAll('.fild input');

    block.innerHTML = '112 - js DOM';

    function log_am(e){
        debugger;
        console.log('log_am');
    };

    function log_am_list(e){
      let item = e.target.closest('.item'),
      img = e.target.closest('.item').querySelector('.img');
      colorInput = e.target.getAttribute('data-color-id')

      img.classList.forEach(classItem => {
        if(classItem != 'img')
          img.classList.remove(classItem);
      })
      img.classList.add(colorInput);
      
      //   --- 
    };

    block.addEventListener("click", log_am);

    inputProduct.forEach(element => {
      element.addEventListener("click", log_am_list);
    });


  });
  