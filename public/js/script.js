


document.getElementById("addNew").addEventListener("click", () => {
    var html = '<div class="form-items">'
    html +='<h3 class="col-md-12">Add you product Today</h3>'
    html +='<form class="requires-validation" method="POST" action="add_product">'

    html += '<div class="col-md-12 mt-3">'
    html +=  '<input style="width: 50%;" class="form-control" type="text" name="name[]" placeholder="product Name" required>'
    html +=' </div>'

    html += '<div class="col-md-12 mt-3">'
    html +=    ' <input style="width: 50%;" class="form-control" type="number" name="price[]" placeholder="price" required>'
    html += '</div>'

    html += '<div class="col-md-12 mt-3">'
    html +=    '<input style="width: 50%;" class="form-control" type="date" name="date[]" placeholder="date">'
    html +='</div>'

    html +='<div class="col-md-12 mt-3">'
    html +=   '<input style="width: 50%;" class="form-control" type="text" name="Description[]" placeholder="description" required>'

    html +=  '</div>'

    html += '<div class="col-md-12 mt-3">'
    html +=     ' <input class="form-control" type="file" name="picture[]" accept="image/png, image/jpeg, image/jpg" placeholder="picture" required="required">'
    html +=  '</div>'

    html +=  '<div class="col-md-12 mt-3">'
    html +=      '<input style="width: 50%;" class="form-control" type="number" name="quantity[]" placeholder="quantity" required>'
    html +=  '</div>'


    html +=  '<div class="form-button mt-3 col-md-12">'
    html +=      '<button type="submit" href="<?= URLROOT ?>dashboardController/add_product" name="submit" class="btn btn-primary">Add</button>'
    html +=  '</div>'

    html += '</form>'
    html += '</div>'
    var form = document.createElement('div');
    form.innerHTML = html;

    document.getElementById("addProductAdd").append(form);
});




// var forms = document.querySelectorAll("form");
// var data = {};
// forms.forEach(function(form) {
//     var inputs = form.getElementsByTagName("input");
//     for (var i = 0; i < inputs.length; i++) {
//         data[inputs[i].name] = inputs[i].value;
//     }
// });
