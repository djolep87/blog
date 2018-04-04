@extends('layouts.app')

@section('content')
       <h1><?php echo $title ?></h1>
      
<!--Section: Team v.1-->
<section class="team-section pb-5">

    <!--Section heading-->
    <h2 class="h1 text-center py-5">Our amazing team</h2>
    <!--Section description-->
    <p class="grey-text pb-5 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi,
        veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum massa neque, blandit ut neque eu, varius maximus tellus. Nam odio felis, sollicitudin venenatis augue ac, feugiat iaculis enim. Nam nec turpis id mi feugiat consectetur. In convallis sapien a mi viverra elementum. Phasellus euismod, mi vitae blandit posuere, erat nisi fringilla velit, quis ullamcorper tortor neque eu arcu. Integer a euismod turpis. Integer sit amet dapibus dui. Mauris consequat in diam vitae ornare. Aliquam vulputate turpis a risus mattis, ut eleifend risus pharetra. Ut eleifend scelerisque bibendum. Vivamus tortor nisl, tincidunt eu cursus eget, ultrices non velit. Fusce sodales dolor ut ipsum faucibus, nec rutrum enim laoreet. Proin tincidunt, urna nec pulvinar viverra, nulla turpis blandit mauris, sit amet tristique mi ligula ac diam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas tempor diam sed risus consectetur porta.</p>

    <!-- Grid row -->
    <div class="row text-center">

        <!-- Grid column -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card card-body">
                <div class="avatar mx-auto my-3">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg" class="rounded-circle img-fluid" alt="First sample avatar image">
                </div>
                <h5 class="font-weight-bold">
                    <strong>Anna Williams</strong>
                </h5>
                <p class="grey-text">Graphic designer</p>

                <ul class="list-unstyled">
                    <!-- Facebook -->
                    <a class="icons-sm fb-ic">
                        <i class="fa fa-facebook blue-text"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="icons-sm tw-ic">
                        <i class="fa fa-twitter blue-text"> </i>
                    </a>
                    <!-- Instagram -->
                    <a class="icons-sm ins-ic">
                        <i class="fa fa-instagram blue-text"> </i>
                    </a>
                </ul>
            </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card card-body">
                <div class="avatar mx-auto my-3">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(3).jpg" class="rounded-circle img-fluid" alt="First sample avatar image">
                </div>
                <h5 class="font-weight-bold">
                    <strong>John Doe</strong>
                </h5>
                <p class="grey-text">Web developer</p>

                <ul class="list-unstyled">
                    <!-- Facebook -->
                    <a class="icons-sm fb-ic">
                        <i class="fa fa-facebook blue-text"> </i>
                    </a>
                    <!-- Instagram -->
                    <a class="icons-sm ins-ic">
                        <i class="fa fa-instagram blue-text"> </i>
                    </a>
                </ul>
            </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card card-body">
                <div class="avatar mx-auto my-3">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" class="rounded-circle img-fluid" alt="First sample avatar image">
                </div>
                <h5 class="font-weight-bold">
                    <strong>Maria Smith</strong>
                </h5>
                <p class="grey-text">Photographer</p>

                <ul class="list-unstyled">
                    <!-- Facebook -->
                    <a class="icons-sm fb-ic">
                        <i class="fa fa-facebook blue-text"> </i>
                    </a>
                    <!-- Instagram -->
                    <a class="icons-sm ins-ic">
                        <i class="fa fa-instagram blue-text"> </i>
                    </a>
                    <!-- Dribbble -->
                    <a class="icons-sm ins-ic">
                        <i class="fa fa-dribbble blue-text"> </i>
                    </a>
                </ul>
            </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card card-body">
                <div class="avatar mx-auto my-3">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg" class="rounded-circle img-fluid" alt="First sample avatar image">
                </div>
                <h5 class="font-weight-bold">
                    <strong>Tom Adams</strong>
                </h5>

                <p class="grey-text">Backend developer</p>

                <ul class="list-unstyled">
                    <!-- Facebook -->
                    <a class="icons-sm fb-ic">
                        <i class="fa fa-facebook blue-text"> </i>
                    </a>
                    <!-- Github -->
                    <a class="icons-sm ins-ic">
                        <i class="fa fa-github blue-text"> </i>
                    </a>
                </ul>
            </div>
        </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row -->

</section>
<!--Section: Team v.1-->
            
       
@endsection