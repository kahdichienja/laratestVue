<template>
    <div>
        <nav class="white lighten-5 hoverable navbar-fixed">
            <div class="nav-wrapper">
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons grey-text">menu</i></a>
                <a href="#!" style="margin-left: 45px;" id="myToggler" class="left brand-logo grey-text lighten-2">App</a>
                <div class="" style="position: absolute; left: 0%; transform: translate(-50%, -50%);" >
                    <input type="text" class="hide-on-med-and-down" id="searchInput" placeholder="Search Articles">
                </div>
            <ul class="right hide-on-med-and-down">
                <li><a href="" title="Groups"><i class="material-icons grey-text lighten-2">bubble_chart</i></a></li>
                <li><a href="" title="Notifications"><i class="material-icons grey-text lighten-2">notifications</i></a></li>
                <li><a href="" title="Agoo Clinton"><img style="height: 40px; width: 40px; margin-right: 25px; margin-top: 10px;" class="circle" src="https://lh5.googleusercontent.com/-0pHxG6KCmAM/AAAAAAAAAAI/AAAAAAAAEp4/z1JytdZXMRI/photo.jpg"></a></li>
            </ul>
            </div>
        </nav>
        <ul class="sidenav" id="mobile-demo">
            <li><a href="">Sass</a></li>
            <li><a href="">Components</a></li>
            <li><a href="">Javascript</a></li>
            <li><a href="">Mobile</a></li>
        </ul>
    </div>
</template>
