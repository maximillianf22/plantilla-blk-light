<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm pt-2 pb-2 fixed-top" style="border-bottom: 2px solid #84e886;">
  <div class="container-fluid"> 
    <div class="align-items-center" style="width: 210px; white-space: nowrap;">
       <a href="" class="mr-2">
        <img src="{{ asset('assets/img/brand/menu.png')}}" class="no-border-radius" style="min-width: 22px; min-height: 20px; max-width: 22px; max-height: 20px">
      </a>
      <a class="navbar-brand m-0 p-0" href="/" rel="tooltip" title="Designed and Coded by Developapp" data-placement="bottom">
        <img src="{{ asset('assets/img/brand/logoc.png')}}" width="82%">
      </a>
    </div>
    <div class="collapse navbar-collapse border-right ml-5 mr-5" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <form class="form-inline bg-light rounded text-nowrap ml-1 mr-1 bttn-search">
                  <div class="form-group no-border" >
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-light ml-3 mr-4"><i class="fas fa-search text-primary"></i></span>
                    </div>
                    <input type="text" class="form-control bg-light text-dark ml-4 mr-5" placeholder="¿Qué producto buscas?" >
                  </div>  
                </form>
            </li>
            <li class="nav-item">
                <a class="form-inline bg-light rounded text-nowrap ml-2 mr-2 shadow-sm border" style="cursor: pointer;">
                  <div class="form-group no-border" >
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-light m-0 p-2">
                        <i class="fas fa-map-marker-alt mr-2 ml-1 text-primary"></i> 
                        <p style="color:;" class="mr-4 ml-3 text-primary"> Ingresa una dirección</p>
                      </span>
                    </div>              
                  </div>  
                </a>
            </li>
        </ul>
        <ul class="navbar-nav align-items-center">
            <li class="nav-item">
                <a href="#" class="nav-item nav-link">
                  <img src="{{ asset('assets/img/brand/coupon.png')}}" class="no-border-radius" style="min-width: 22px; min-height: 20px; max-width: 22px; max-height: 20px">
              </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-item nav-link">
                  <img src="{{ asset('assets/img/brand/cart.png')}}"  class="no-border-radius"style="min-width: 33px; min-height: 27px; max-width: 33px; max-height: 27px">
                </a>
            </li>
        </ul>
    </div>
        <button href="#" class="btn btn-primary btn-sm"><strong>Ingresar</strong></button>
  </div>
</nav>




              