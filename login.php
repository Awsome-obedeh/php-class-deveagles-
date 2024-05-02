<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
 
</head>

<style>
    .err{
        display: none;
    }

   
.loader {
  width: 60px;
  aspect-ratio: 4;
  background: radial-gradient(closest-side at calc(100%/6) 50%,#000 90%,#0000) 0/75% 100%;
  position: relative;
  animation: l15-0 1s infinite linear;
  display: none;
}
.loader::before {
  content:"";
  position: absolute;
  background: inherit;
  clip-path: inset(0 0 0 50%);
  inset: 0;
  animation: l15-1 0.5s infinite linear;
}
@keyframes l15-0 { 
    0%,49.99% {transform: scale(1)}
    50%,100%  {transform: scale(-1)} 
}
@keyframes l15-1 { 
    0%       {transform: translateX(-37.5%) rotate(0turn)} 
    80%,100% {transform: translateX(-37.5%) rotate(1turn)} 
}
</style>

<body>
    <div class="container mx-auto">
    <!-- error message -->
    <form method="POST"  class="mt-5 form" action>
            <div class="alert alert-primary err"></div>

            <div>
                <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
                <input type="email" class="form-control email" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div>

                <div>
                    <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
                    <input type="text" class="form-control password" id="exampleInputPassword1" autocomplete="off" name="password">
                </div>

                <button type="submit" class="btn btn-success  mt-3" name="register">Login</button>
                <div class="loader mx-auto"></div>
        </form>

        <div class="box">12</div>
        <div id="box1"></div>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    </div>
</body>
<?php include_once('includes/scripts.php')?>

</html>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>