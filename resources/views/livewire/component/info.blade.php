             <div class="card-body">
                 <h3 class="main-title text-1-5xl sm:text-5xl  mb-2 font-normal font-lf-bold max-w-lg mx-auto text-left md:text-left"
                     style="color:#0f1f40;">Hey tu.. Si Tu...</span>
                     <div class="main-title-anim-container flex text-left md:text-left">
                         <span class="text-lf-teal main-title-parts trans opacity-100 block text-left md:text-left"
                             style="width: 200px; color:#f99000; text-align: left">
                             Participa</span>
                         <span class=" block mx-1 sm:mx-2"> y </span><span
                             class="block text-lf-teal main-title-parts trans opacity-100"
                             style="color:#f99000">Gana</span>
                     </div>
                 </h3>

                 <div class="container.con justify-content-start">
                     <div class="row">


                         <div class="embed-responsive embed-responsive-16by9">
                             <video class="embed-responsive-item video-fluid" autoplay loop muted
                                 style="height: 500px; width: 500px">
                                 <source src="media/luttie.mp4" type="video/mp4" />
                             </video>
                         </div>
                     </div>
                 </div>

                 <!-- Modal -->
                 <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                     tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                     <div class="modal-dialog">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title" id="staticBackdropLabel">Felicidades! Tenemos un ganador..
                                 </h5>
                             </div>
                             <div class="modal-body">
                                 <div class="row" style="font-size: 4px">

                                     <div class="image col-sm-6">
                                         <div class="containerImage">
                                             <div class="form-image form-container container">
                                                 <video class="video-fluid" autoplay loop muted
                                                     style="height: 200px; width: 200px">
                                                     <source src="media/congratulation.mp4" type="video/mp4" />
                                                 </video>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="image col-sm-2">
                                         <div class="container">
                                         </div>
                                     </div>

                                 </div>
                             </div>
                             <div class="modal-footer">
                                 <a href="{{ route('user') }}" type="button" class="btn btn-secondary">Cerrar</a>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>
