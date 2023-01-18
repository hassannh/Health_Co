



<div style="
    display: flex;
    justify-content: center;">
    <form method="post" action="register" style="width: 50%;">
    <div class="form-group">
        <label for="name" class="inputWidth">name</label>
        <input type="name" name="name" class="form-control inputWidth" id="" placeholder="username">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="inputWidth">Email address</label>
        <input type="email" name="email" class="form-control inputWidth" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
 
    <div class="form-group">
        <label for="exampleInputPassword1" class="inputWidth">Password</label>
        <input type="password" name="password" class="form-control inputWidth" id="exampleInputPassword1" placeholder="Password">
    </div>
 
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<button name="login" href="<?=URLROOT?>AdminController/login" class="btn mt-3">sing in</button>


