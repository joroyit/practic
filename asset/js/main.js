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
      debugger;
      console.log(e.target.closest('.item'));
      e.target.closest('.item');
      
      //   --- 

      let blox = e.target.closest('.item');
      console.log(blox.querySelector('.img'));

    };

    block.addEventListener("click", log_am);

    inputProduct.forEach(element => {
      element.addEventListener("click", log_am_list);
    });


  });
  