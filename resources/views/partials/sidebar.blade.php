<div>
    <div :class="{'show-sidebar': isopen_sidebar}" class="sidebar">
        <div class="sidebar-title">
            <button class="close-button" @click="isopen_sidebar = !isopen_sidebar">
                <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
            <h1>SMP NEGERI 4 TANGERANG</h1>
        </div>
        <div class="sidebar-content" x-data="{drop1 : false, drop2 : false, drop3: false}">
            <a href="/">
                <div class="content-list">
                    <div class="svg-container">
                        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                            <path d="M3 9L12 2L21 9V20C21 20.5304 20.7893 21.0391 20.4142 21.4142C20.0391 21.7893 19.5304 22 19 22H5C4.46957 22 3.96086 21.7893 3.58579 21.4142C3.21071 21.0391 3 20.5304 3 20V9Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9 22V12H15V22" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <p>Home</p>
                </div>
            </a>
            
            <div class="content-list">
                <img src="assets/profile-sidebar.png" alt="profile">
                <p>Profile</p>
                <button class="dropdown-button" @click="drop1 = !drop1">
                    <div class="svg-container">
                        <svg x-show="!drop1" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 14" fill="none" >
                            <path d="M1 13L7 7L1 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <svg class="arrow-down" x-show="drop1" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24" fill="none" >
                            <path d="M6 9L12 15L18 9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </button>
            </div>
            
            <ul class="dropdown-list" x-show="drop1" x-transition>
                <li><a href="">Sejarah</a></li>
                <li><a href="">Staff</a></li>
                <li><a href="">Ekskul</a></li>
            </ul>
            
            <div class="content-list">
                <img src="assets/akademik-sidebar.png" alt="akademik">
                <p>Akademik</p>
                <button class="dropdown-button" @click="drop2 = !drop2">
                    <div class="svg-container">
                        <svg x-show="!drop2" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 14" fill="none" >
                            <path d="M1 13L7 7L1 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <svg class="arrow-down" x-show="drop2" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24" fill="none" >
                            <path d="M6 9L12 15L18 9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </button>
            </div>
            
            <ul class="dropdown-list" x-show="drop2" x-transition>
                <li><a href="">Kalender Akademik</a></li>
                <li><a href="">Prestasi</a></li>
            </ul>
            <a href="#">
                <div class="content-list">
                    <img src="assets/berita-sidebar.png" alt="berita">
                    <p>Pengumuman & Berita</p>
                </div>
            </a>
            
            <div class="content-list">
                <img src="assets/dokumentasi-sidebar.png" alt="dokumentasi">
                <p>Dokumentasi</p>
                <button class="dropdown-button" @click="drop3 = !drop3">
                    <div class="svg-container">
                        <svg x-show="!drop3" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 14" fill="none">
                            <path d="M1 13L7 7L1 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <svg class="arrow-down" x-show="drop3" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24" fill="none">
                            <path d="M6 9L12 15L18 9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </button>
            </div>
            
            <ul class="dropdown-list" x-show="drop3" x-transition>
                <li><a href="">Kelas - 7</a></li>
                <li><a href="">Kelas - 8</a></li>
                <li><a href="">Kelas - 9</a></li>
            </ul>
        </div>
    </div>
    <div :class="{'d-none': isopen_sidebar}" class="close-sidebar">
        <div class="close-sidebar-title">
            <button class="close-button" @click="isopen_sidebar = !isopen_sidebar">
                <div class="svg-container">
                    <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 16" fill="none">
                        <rect y="13.8667" width="20" height="1.73333" fill="#D9D9D9"/>
                        <rect width="20" height="1.73333" fill="#D9D9D9"/>
                        <rect y="6.93335" width="20" height="1.73333" fill="#D9D9D9"/>
                    </svg>
                </div>
            </button>
        </div>
        <div class="close-sidebar-content">
            <a href="/">
                <div class="close-content-list">
                    <div class="svg-container">
                        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                            <path d="M3 9L12 2L21 9V20C21 20.5304 20.7893 21.0391 20.4142 21.4142C20.0391 21.7893 19.5304 22 19 22H5C4.46957 22 3.96086 21.7893 3.58579 21.4142C3.21071 21.0391 3 20.5304 3 20V9Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9 22V12H15V22" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
            </a>
        
            

            <div class="btn-group dropend close-content-list">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="assets/profile-sidebar.png" alt="profile">
            </button>
            <ul class="dropdown-menu">
                <li><a href="">Sejarah</a></li>
                <li><a href="">Staff</a></li>
                <li><a href="">Ekskul</a></li>
            </ul>
            </div>

            
            <div class="btn-group dropend close-content-list">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="assets/akademik-sidebar.png" alt="akademik">
            </button>
            <ul class="dropdown-menu">
                <li><a href="">Kalender Akademik</a></li>
                <li><a href="">Prestasi</a></li>
            </ul>
            </div>

            <a href="#">
                <div class="close-content-list">
                    <img src="assets/berita-sidebar.png" alt="berita">
                </div>
            </a>
            
            <div class="btn-group dropend close-content-list">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="assets/dokumentasi-sidebar.png" alt="dokumentasi">
            </button>
            <ul class="dropdown-menu">
                <li><a href="">Kelas - 7</a></li>
                <li><a href="">Kelas - 8</a></li>
                <li><a href="">Kelas - 9</a></li>
            </ul>
            </div>
           
            
        </div>
    </div>

</div>