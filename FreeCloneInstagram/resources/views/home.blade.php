@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img alt="" src="https://instagram.ffez1-2.fna.fbcdn.net/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=instagram.ffez1-2.fna.fbcdn.net&amp;_nc_ohc=18136cTRcQ4AX-UhNlH&amp;tp=1&amp;oh=3955abb5c1cb4203181eeecc72ffffc2&amp;oe=600C8F67" class="rounded-circle"/>
        </div>
            <div class="col-9 pt-5" >
            <div ><h1>{{ $user->username }}</h1></div>
        <div>
            <div class="d-flex">
                <div class="pr-3"><strong>351</strong> publications</div>
                <div class="pr-3"><strong>62,4K</strong> abonnés</div>
                <div class="pr-3"><strong>292</strong> abonnements</div>
            </div>
            <div class="pt-4 font-weight-bold">freeCodeCamp.org</div>
            <div>We're a global community of millions of people learning to code together. We're an
            open source, donor-supported, 501(c)(3) nonprofit.</div>
            <div>
                <a href="#">www.freecodecamp.org</a>
            </div>
        </div>
        </div>
    </div>
    <div class="row pt-5">
    <div class="col-4">
        <img alt="" decoding="auto" style="object-fit: cover;" sizes="293px" srcset="https://instagram.ffez1-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.126.1030.1030a/s150x150/132108303_387834418947654_9162973108623918750_n.jpg?_nc_ht=instagram.ffez1-1.fna.fbcdn.net&amp;_nc_cat=106&amp;_nc_ohc=2PxnI3jPKcsAX8KGgxE&amp;tp=1&amp;oh=f01ebbd72716ddc23a0bc684de54b0e2&amp;oe=600F3725 150w,https://instagram.ffez1-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.126.1030.1030a/s240x240/132108303_387834418947654_9162973108623918750_n.jpg?_nc_ht=instagram.ffez1-1.fna.fbcdn.net&amp;_nc_cat=106&amp;_nc_ohc=2PxnI3jPKcsAX8KGgxE&amp;tp=1&amp;oh=6c67c3ae70c335bdd98dd7623cfc4094&amp;oe=600EE923 240w,https://instagram.ffez1-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.126.1030.1030a/s320x320/132108303_387834418947654_9162973108623918750_n.jpg?_nc_ht=instagram.ffez1-1.fna.fbcdn.net&amp;_nc_cat=106&amp;_nc_ohc=2PxnI3jPKcsAX8KGgxE&amp;tp=1&amp;oh=c4f678fa1fe202e26de64b72b0dd24d0&amp;oe=600CC5DD 320w,https://instagram.ffez1-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.126.1030.1030a/s480x480/132108303_387834418947654_9162973108623918750_n.jpg?_nc_ht=instagram.ffez1-1.fna.fbcdn.net&amp;_nc_cat=106&amp;_nc_ohc=2PxnI3jPKcsAX8KGgxE&amp;tp=1&amp;oh=8b80348990c9d068b9dabfb5c21440ea&amp;oe=600D519C 480w,https://instagram.ffez1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.126.1030.1030a/s640x640/132108303_387834418947654_9162973108623918750_n.jpg?_nc_ht=instagram.ffez1-1.fna.fbcdn.net&amp;_nc_cat=106&amp;_nc_ohc=2PxnI3jPKcsAX8KGgxE&amp;tp=1&amp;oh=9fcbbee8b9e8841958516103b02edf84&amp;oe=600E4A15 640w" src="https://instagram.ffez1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.126.1030.1030a/s640x640/132108303_387834418947654_9162973108623918750_n.jpg?_nc_ht=instagram.ffez1-1.fna.fbcdn.net&amp;_nc_cat=106&amp;_nc_ohc=2PxnI3jPKcsAX8KGgxE&amp;tp=1&amp;oh=9fcbbee8b9e8841958516103b02edf84&amp;oe=600E4A15" class="w-100"/>
    </div>
    <div class="col-4">
     <img alt="" class="w-100" decoding="auto" style="object-fit: cover;" sizes="293px" srcset="https://instagram.ffez1-2.fna.fbcdn.net/v/t51.2885-15/e35/c132.0.564.564a/s150x150/131897168_727687298175032_7267052498875164208_n.jpg?_nc_ht=instagram.ffez1-2.fna.fbcdn.net&amp;_nc_cat=108&amp;_nc_ohc=OZRYnG-xtXwAX96TbRO&amp;tp=1&amp;oh=950901f958e8341acf0c89029c365ee3&amp;oe=600F0FBB 150w,https://instagram.ffez1-2.fna.fbcdn.net/v/t51.2885-15/e35/c132.0.564.564a/s240x240/131897168_727687298175032_7267052498875164208_n.jpg?_nc_ht=instagram.ffez1-2.fna.fbcdn.net&amp;_nc_cat=108&amp;_nc_ohc=OZRYnG-xtXwAX96TbRO&amp;tp=1&amp;oh=dd004175fa0bf72e75a8f8b601ba6298&amp;oe=601000BD 240w,https://instagram.ffez1-2.fna.fbcdn.net/v/t51.2885-15/e35/c132.0.564.564a/s320x320/131897168_727687298175032_7267052498875164208_n.jpg?_nc_ht=instagram.ffez1-2.fna.fbcdn.net&amp;_nc_cat=108&amp;_nc_ohc=OZRYnG-xtXwAX96TbRO&amp;tp=1&amp;oh=d91572fd0bddc8323da7e7e2307adc45&amp;oe=6010FB43 320w,https://instagram.ffez1-2.fna.fbcdn.net/v/t51.2885-15/e35/c132.0.564.564a/s480x480/131897168_727687298175032_7267052498875164208_n.jpg?_nc_ht=instagram.ffez1-2.fna.fbcdn.net&amp;_nc_cat=108&amp;_nc_ohc=OZRYnG-xtXwAX96TbRO&amp;tp=1&amp;oh=5590bc00b6ddf7088733bbf46b0d6926&amp;oe=600F6E86 480w,https://instagram.ffez1-2.fna.fbcdn.net/v/t51.2885-15/e35/c132.0.564.564a/131897168_727687298175032_7267052498875164208_n.jpg?_nc_ht=instagram.ffez1-2.fna.fbcdn.net&amp;_nc_cat=108&amp;_nc_ohc=OZRYnG-xtXwAX96TbRO&amp;tp=1&amp;oh=a9f75239e5a65abcd8adfce5b1ab5e77&amp;oe=600FE5E8 640w" src="https://instagram.ffez1-2.fna.fbcdn.net/v/t51.2885-15/e35/c132.0.564.564a/131897168_727687298175032_7267052498875164208_n.jpg?_nc_ht=instagram.ffez1-2.fna.fbcdn.net&amp;_nc_cat=108&amp;_nc_ohc=OZRYnG-xtXwAX96TbRO&amp;tp=1&amp;oh=a9f75239e5a65abcd8adfce5b1ab5e77&amp;oe=600FE5E8">

     </div>
     <div class="col-4">
<img alt="" class="w-100" decoding="auto" style="object-fit: cover;" sizes="293px" srcset="https://instagram.ffez1-2.fna.fbcdn.net/v/t51.2885-15/e35/c52.0.724.724a/s150x150/131074722_3585003178205266_1692270944517370256_n.jpg?_nc_ht=instagram.ffez1-2.fna.fbcdn.net&amp;_nc_cat=110&amp;_nc_ohc=auSxSOxmnAIAX-cicRS&amp;tp=1&amp;oh=c7f06ea85117b8cb06f2a554ed310508&amp;oe=6010B1D5 150w,https://instagram.ffez1-2.fna.fbcdn.net/v/t51.2885-15/e35/c52.0.724.724a/s240x240/131074722_3585003178205266_1692270944517370256_n.jpg?_nc_ht=instagram.ffez1-2.fna.fbcdn.net&amp;_nc_cat=110&amp;_nc_ohc=auSxSOxmnAIAX-cicRS&amp;tp=1&amp;oh=bdd409cb1dd8f4f8f6fb368b87a82056&amp;oe=600EC39D 240w,https://instagram.ffez1-2.fna.fbcdn.net/v/t51.2885-15/e35/c52.0.724.724a/s320x320/131074722_3585003178205266_1692270944517370256_n.jpg?_nc_ht=instagram.ffez1-2.fna.fbcdn.net&amp;_nc_cat=110&amp;_nc_ohc=auSxSOxmnAIAX-cicRS&amp;tp=1&amp;oh=992c8c6b086fe2af5d0a87f3c081f1d2&amp;oe=600F8BC4 320w,https://instagram.ffez1-2.fna.fbcdn.net/v/t51.2885-15/e35/c52.0.724.724a/s480x480/131074722_3585003178205266_1692270944517370256_n.jpg?_nc_ht=instagram.ffez1-2.fna.fbcdn.net&amp;_nc_cat=110&amp;_nc_ohc=auSxSOxmnAIAX-cicRS&amp;tp=1&amp;oh=cd505afd0a93c4b4484f7f9552c26380&amp;oe=60114902 480w,https://instagram.ffez1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c52.0.724.724a/s640x640/131074722_3585003178205266_1692270944517370256_n.jpg?_nc_ht=instagram.ffez1-2.fna.fbcdn.net&amp;_nc_cat=110&amp;_nc_ohc=auSxSOxmnAIAX-cicRS&amp;tp=1&amp;oh=7c18c8dd7ccc7154aa7aa3f67d48cb76&amp;oe=600FCC7B 640w" src="https://instagram.ffez1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c52.0.724.724a/s640x640/131074722_3585003178205266_1692270944517370256_n.jpg?_nc_ht=instagram.ffez1-2.fna.fbcdn.net&amp;_nc_cat=110&amp;_nc_ohc=auSxSOxmnAIAX-cicRS&amp;tp=1&amp;oh=7c18c8dd7ccc7154aa7aa3f67d48cb76&amp;oe=600FCC7B">    </div>

    </div>


</div>

@endsection
