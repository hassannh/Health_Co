


document.getElementById("addNew").addEventListener("click", () => {
    var html = '<div class="form-items">'
    html +='<h3 class="col-md-12">Add you product Today</h3>'


    html += '<div class="col-md-12 mt-3">'
    html +=  '<input style="width: 50%;" class="form-control" type="text" name="name[1]" placeholder="product Name" required>'
    html +=' </div>'

    html += '<div class="col-md-12 mt-3">'
    html +=    ' <input style="width: 50%;" class="form-control" type="number" name="price[1]" placeholder="price" required>'
    html += '</div>'

    html +='<div class="col-md-12 mt-3">'
    html +=   '<input style="width: 50%;" class="form-control" type="text" name="Description[1]" placeholder="description" required>'

    html +=  '</div>'

    html += '<div class="col-md-12 mt-3">'
    html +=     ' <input class="form-control" type="file" name="picture[1]" accept="image/png, image/jpeg, image/jpg" placeholder="picture" required="required">'
    html +=  '</div>'

    html +=  '<div class="col-md-12 mt-3">'
    html +=      '<input style="width: 50%;" class="form-control" type="number" name="quantity[1]" placeholder="quantity" required>'
    html +=  '</div>'


    html +=  '<div class="form-button mt-3 col-md-12">'
    html +=      '<button type="submit" href="<?= URLROOT ?>dashboardController/add_product" name="submit" class="btn btn-primary">Add</button>'
    html +=  '</div>'

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
