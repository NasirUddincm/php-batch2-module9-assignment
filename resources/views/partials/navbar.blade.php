<nav class="navbar bg-light navbar-expand-lg menu shadow fixed-top">
    <div class="container">          
        <a class="navbar-brand" href="#">
            <img src="{{asset('asset/images/logo.png')}}" alt="logo image">
        </a>
        <button class="navbar-toggler" type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                aria-expanded="false" 
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item mx-2">
                    <a class="nav-link active" aria-current="page" 
                    href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="{{url('/about')}}">About Me</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="{{url('/projects')}}">Projects</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="{{url('/contact')}}">Contact Us</a>
                </li>            
                        
                
            </ul>
            <button type="button" 
                class="rounded-pill btn btn-outline-light btn-rounded btn-dark p-2">
                +8807000000
                <span class="ms-4">                    
                <i class="fa-solid fa-phone p-2 rounded-circle bg-danger"></i>
                                    
                </span>
            </button>
        </div>
    </div>
</nav>