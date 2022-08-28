             <div class="card-body">
                <!-- Button trigger modal -->
                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                     Launch static backdrop modal
                 </button>
        <h3 class="main-title text-1-5xl sm:text-5xl  mb-2 font-normal font-lf-bold max-w-lg mx-auto text-left md:text-left" style="color:#0f1f40;"
          >Hey tu.. Si Tu...</span>
            <div class="main-title-anim-container flex text-left md:text-left">
              <span class="text-lf-teal main-title-parts trans opacity-100 block text-left md:text-left" style="width: 200px; color:#f99000; text-align: left">Participa</span>
              <span class=" block mx-1 sm:mx-2"> y </span><span class="block text-lf-teal main-title-parts trans opacity-100" style="color:#f99000">Gana</span>
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
                                 @if ($count < 5)
                                     <h5 class="modal-title" id="staticBackdropLabel">Estamos a punto de elegir un
                                         ganador</h5>
                                 @else
                                     <h5 class="modal-title" id="staticBackdropLabel">Felicidades! Tenemos un ganador..
                                     </h5>
                                 @endif
                             </div>
                             <div class="modal-body">
                                 @if ($count < 5)
                                 <h1> aun no hay 5 participantes</h1>
                                 @else
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
                                                 @foreach ($winner as $g)
                                                     <h5>{{ $g->id }}</h5>
                                                     <h5>{{ $g->nombre }}</h5>
                                                     <h5>{{ $g->apellido }}</h5>
                                                     <h5>{{ $g->celular }}</h5>
                                                     <h5>{{ $g->correo }}</h5>
                                                 @endforeach
                                             </div>
                                         </div>

                                     </div>
                                 
                                 @endif
                             </div>
                             <div class="modal-footer">
                                 <a href="{{ route('user') }}" type="button" class="btn btn-secondary">Cerrar</a>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>





    <script type="text/javascript">
      (function(e, t) {
          var n = e.amplitude || {
              _q: [],
              _iq: {}
          };
          var r = t.createElement("script");
          r.type = "text/javascript";
          r.integrity = "sha384-girahbTbYZ9tT03PWWj0mEVgyxtZoyDF9KVZdL+R53PP5wCY0PiVUKq0jeRlMx9M";
          r.crossOrigin = "anonymous";
          r.async = true;
          r.src = "https://cdn.amplitude.com/libs/amplitude-7.2.1-min.gz.js";
          r.onload = function() {
              if (!e.amplitude.runQueuedFunctions) {
                  console.log("[Amplitude] Error: could not load SDK")
              }
          };

          function s(e, t) {
              e.prototype[t] = function() {
                  this._q.push([t].concat(Array.prototype.slice.call(arguments, 0)));
                  return this
              }
          }
          var o = function() {
              this._q = [];
              return this
          };
          var a = ["add", "append", "clearAll", "prepend", "set", "setOnce", "unset"];
          for (var u = 0; u < a.length; u++) {
              s(o, a[u])
          }
          n.Identify = o;
          var c = function() {
              this._q = [];
              return this
          };
          var l = ["setProductId", "setQuantity", "setPrice", "setRevenueType", "setEventProperties"];
          for (var p = 0; p < l.length; p++) {
              s(c, l[p])
          }
          n.Revenue = c;
          var d = ["init", "logEvent", "logRevenue", "setUserId", "setUserProperties", "setOptOut", "setVersionName",
              "setDomain", "setDeviceId", "enableTracking", "setGlobalUserProperties", "identify",
              "clearUserProperties", "setGroup", "logRevenueV2", "regenerateDeviceId", "groupIdentify", "onInit",
              "logEventWithTimestamp", "logEventWithGroups", "setSessionId", "resetSessionId"
          ];

          function v(e) {
              function t(t) {
                  e[t] = function() {
                      e._q.push([t].concat(Array.prototype.slice.call(arguments, 0)))
                  }
              }
              for (var n = 0; n < d.length; n++) {
                  t(d[n])
              }
          }
          v(n);
          n.getInstance = function(e) {
              e = (!e || e.length === 0 ? "$default_instance" : e).toLowerCase();
              if (!n._iq.hasOwnProperty(e)) {
                  n._iq[e] = {
                      _q: []
                  };
                  v(n._iq[e])
              }
              return n._iq[e]
          };
          e.amplitude = n
      })(window, document);
      amplitude.getInstance().init("92dd3459e91268bfffd6866dd216bc54");

      // INFO---------------------------------------------------------------------------------------------------AQUI
      let mainTitleCounter = 1;
      let forYour = [{
              label: "Comprobantes",
              width: "105px",
              widthSM: "335px",
          }, {
              label: "mucho más.",
              width: "372px",
              widthSM: "390px",
          }, {
              label: "Facturas",
              width: "280px",
              widthSM: "200px",
          }, {

              label: "Estados de cartera",
              width: "900px",
              widthSM: "430px",
          }
      ];

      let mainTitleParts = document.querySelectorAll(".main-title-parts");

      if (window.innerWidth < 567) {
          mainTitleParts[0].style.width = forYour[0].width;
      }

      setInterval(() => {
          mainTitleCounter = (mainTitleCounter == (forYour.length - 1)) ? 0 : mainTitleCounter + 1;
          let mainTitlePart_1 = mainTitleParts[0];
          let mainTitlePart_2 = mainTitleParts[1];

          setTimeout(() => {
              if (mainTitleCounter % 2 == 0) {
                  if (window.innerWidth >= 567) {
                      mainTitlePart_1.style.width = forYour[mainTitleCounter].widthSM;
                  } else {
                      mainTitlePart_1.style.width = forYour[mainTitleCounter].width;
                  }
              }
              mainTitlePart_1.innerHTML = forYour[mainTitleCounter].label;
              mainTitlePart_1.classList.remove('opacity-0');
              mainTitlePart_1.classList.add('opacity-100');

              mainTitlePart_2.innerHTML = forYour[mainTitleCounter + 1].label;
              mainTitlePart_2.classList.remove('opacity-0');
              mainTitlePart_2.classList.add('opacity-100');

          }, 500);
      }, 3000);
  </script> 
