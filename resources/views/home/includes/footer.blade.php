<footer>
    <div class="">
        <svg
          version="1.1"
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          x="0px"
          y="0px"
          width="100%"
          height="100%"
          viewBox="0 600 1600 200"
        >
          <defs>
            <linearGradient id="bg" x2="0%" y2="100%">
              <stop
                offset="100%"
                style="stop-color: #171B2A"
              ></stop>
              <stop
                offset="100%"
                style="stop-color: #171B2A"
              ></stop>
            </linearGradient>
            <path
              id="wave"
              fill="url(#bg)"
              d="M-363.852,502.589c0,0,236.988-41.997,505.475,0
      s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z"
            />
          </defs>
          <g>
            <use xlink:href="#wave" opacity=".9">
              <animateTransform
                attributeName="transform"
                attributeType="XML"
                type="translate"
                dur="8s"
                calcMode="spline"
                values="270 230; -334 180; 270 230"
                keyTimes="0; .5; 1"
                keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                repeatCount="indefinite"
              />
            </use>
            <use xlink:href="#wave" opacity=".3">
              <animateTransform
                attributeName="transform"
                attributeType="XML"
                type="translate"
                dur="6s"
                calcMode="spline"
                values="-270 230;243 220;-270 230"
                keyTimes="0; .6; 1"
                keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                repeatCount="indefinite"
              />
            </use>
            <use xlink:href="#wave" opacty=".6">
              <animateTransform
                attributeName="transform"
                attributeType="XML"
                type="translate"
                dur="4s"
                calcMode="spline"
                values="0 230;-140 200;0 230"
                keyTimes="0; .4; 1"
                keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                repeatCount="indefinite"
              />
            </use>
          </g>
        </svg>
      </div>
    <div class="bg-[#171A2A] pt-1">
        <div class="container-fluid m-auto space-y-8 px-6 text-light md:px-12 lg:px-20">
            <div class="grid grid-cols-8 gap-6 md:gap-0">
                <div class="col-span-8 md:col-span-2 lg:col-span-3">
                    <div
                        class="flex items-center justify-between gap-6 py-6 md:block md:space-y-6 md:py-0">
                        <img src="{{ $company->logo ?? '' }}" alt="Logo" width="150" >
                        <div class="footer-address" style="word-break: break-all">
                            <ul>
                                <li class="text-hover-webiin">
                                    <div class="footer-address-icon">
                                        <i class="icon-placeholder"></i>
                                    </div>
                                    <div class="footer-address-info">
                                        <p class="text-light"> {{ $company->address ?? '' }}</p>
                                    </div>
                                </li>
                                <li class="text-hover-webiin">
                                    <div class="footer-address-icon">
                                        <i class="icon-call"></i>
                                    </div>
                                    <div class="footer-address-info">
                                        <p><a class="text-light" href="tel:{{ $company->phone ?? '' }}">{{ $company->phone ?? '' }}</a></p>
                                    </div>
                                </li>
                                <li class="text-hover-webiin">
                                    <div class="footer-address-icon">
                                        <i class="icon-mail"></i>
                                    </div>
                                    <div class="footer-address-info">
                                        <p><a class="text-light" href="mailto:{{ $company->email ?? '' }}">{{ $company->email ?? '' }}</a>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-span-8 md:col-span-6 lg:col-span-5">
                    <div class="grid grid-cols-2 gap-6 pb-16 sm:grid-cols-3 md:pl-16">
                        <div>
                            <h6 class="text-lg font-medium text-light">Webiin</h6>
                            <ul class="mt-4 list-inside space-y-4">
                                <li><a class="text-hover-webiin transition" href="{{ route('home') }}">Home</a></li>
                                <li><a class="text-hover-webiin transition" href="{{ route('shop.index') }}">Template</a></li>
                                <li><a class="text-hover-webiin transition" href="{{ route('home.about') }}">Pertanyaan</a></li>
                            </ul>
                        </div>
                        <div>
                            <h6 class="text-lg font-medium text-light">Layanan</h6>
                            <ul class="mt-4 list-inside space-y-4">
                            <li><a class="text-hover-webiin transition" href="{{route('shop.index')}}" disable>Pembuatan
                                    Website</a></li>
                            <li><a class="text-hover-webiin transition" href="" style="pointer-events: none"> Pembuatan Web
                                    Apps</a></li>
                            <li><a class="text-hover-webiin transition" href="" style="pointer-events: none">Aplikasi
                                    Mobile</a></li>
                            </ul>
                        </div>
                        <div>
                            <h6 class="text-lg font-medium text-light">Pembayaran</h6>
                            <ul class="mt-4 list-inside space-y-4">
                               <img src="{{url("/themes-frontend/img/payment.png")}}" alt="Payment">
                            </ul>
                        </div>
                    </div>
                    <div class="flex py-4 pb-8 md:pl-16">
                        <span class="mr-3">&copy; Webiin.com - <span id="year"></span> 2024 </span>
                        <span> All right reserved</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
