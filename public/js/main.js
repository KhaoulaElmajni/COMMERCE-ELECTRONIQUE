function getCatProducts($id) {
   const input = document.querySelector("#id_cat");
   const form = document.querySelector("#catProd");

   input.value = $id;
   form.submit();

}

function submitForm($id){
    const input = document.querySelector("#product_id");
    const form = document.querySelector("#form");
 
    input.value = $id;
    form.submit();
 
}