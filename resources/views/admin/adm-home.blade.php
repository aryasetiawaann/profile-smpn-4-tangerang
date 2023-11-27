@extends('layouts.admin')

@section('content')
<div class="homeadmin-container">
    <div class="homeadmin-left">
        <div class="homeadmin-left-top">
            <h1>Dashboard</h1>
            <img src="/assets/banner.png" alt="banner">
        </div>
        <div class="homeadmin-left-bottom">
            <h1>Staff</h1>
            <div class="homeadmin-stafflist">
                <table>
                    <thead class="thead-admin">
                        <tr class="tr-admin">
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="assets\kepsek.png" alt="Foto"></td>
                            <td><p>Tulis nama disini</p></td>
                            <td><p>Kepala Sekolah</p></td>
                        </tr>
                        <tr>
                            <td><img src="assets\kepsek.png" alt="Foto"></td>
                            <td><p>Tulis nama disini</p></td>
                            <td><p>Kepala Sekolah</p></td>
                        </tr>
                        <tr>
                            <td><img src="assets\kepsek.png" alt="Foto"></td>
                            <td><p>Tulis nama disini</p></td>
                            <td><p>Kepala Sekolah</p></td>
                        </tr>
                        <tr>
                            <td><img src="assets\kepsek.png" alt="Foto"></td>
                            <td><p>Tulis nama disini</p></td>
                            <td><p>Kepala Sekolah</p></td>
                        </tr>
                        <tr>
                            <td><img src="assets\kepsek.png" alt="Foto"></td>
                            <td><p>Tulis nama disini</p></td>
                            <td><p>Kepala Sekolah</p></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="homeadmin-right">
        <div class="homeadmin-calendar">
            <div class="calendar-top">
                <p class="current-date"></p>
                <div class="icons">
                    <span id="prev" class="material-symbols-outlined">chevron_left</span>
                    <span id="next" class="material-symbols-outlined">chevron_right</span>
                </div>
            </div>
            <div class="calendar">
                <ul class="weeks">
                    <li><p>Sun</p></li>
                    <li><p>Mon</p></li>
                    <li><p>Tue</p></li>
                    <li><p>Wed</p></li>
                    <li><p>Thu</p></li>
                    <li><p>Fri</p></li>
                    <li><p>Sat</p></li>
                </ul>
                <ul class="days"></ul>
            </div>
        </div>
        <div class="homeadmin-berita">
            <h1>Pengumuman dan Berita</h1>
            <div class="homeadmin-berita-list">
                <div class="homeadmin-berita-list-item">
                    <img src="/assets/basket.jpeg" alt="basket">
                    <div>
                        <h3>SMPN 4 TANGERANG something...</h3>
                        <p class="homeadmin-berita-list-tanggal">27 November 2023</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab, corporis itaque? Cumque nobis commodi delectus et nemo, unde voluptatum incidunt.</p>
                    </div>
                </div>
                <div class="homeadmin-berita-list-item">
                    <img src="/assets/basket.jpeg" alt="basket">
                    <div>
                        <h3>SMPN 4 TANGERANG something...</h3>
                        <p class="homeadmin-berita-list-tanggal">27 November 2023</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab, corporis itaque? Cumque nobis commodi delectus et nemo, unde voluptatum incidunt.</p>
                    </div>
                </div>
                <div class="homeadmin-berita-list-item">
                    <img src="/assets/basket.jpeg" alt="basket">
                    <div>
                        <h3>SMPN 4 TANGERANG something...</h3>
                        <p class="homeadmin-berita-list-tanggal">27 November 2023</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab, corporis itaque? Cumque nobis commodi delectus et nemo, unde voluptatum incidunt.</p>
                    </div>
                </div>
                <div class="homeadmin-berita-list-item">
                    <img src="/assets/basket.jpeg" alt="basket">
                    <div>
                        <h3>SMPN 4 TANGERANG something...</h3>
                        <p class="homeadmin-berita-list-tanggal">27 November 2023</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab, corporis itaque? Cumque nobis commodi delectus et nemo, unde voluptatum incidunt.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- <div class="admin-content-admin">
            <main>
                <h1 style="font-weight: 600;">Dashboard</h1>
                <div class="image-box">
                    <img src="assets\foto-sekolah.png" alt="Your Image">
                </div>
                <div class="staff-box-admin">
                    <h2 style="font-weight: 600;">Staff</h2>
                    <table class="table-admin">
                        <thead class="thead-admin">
                            <tr class="tr-admin">
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="assets\kepsek.png" alt="Foto"></td>
                                <td>M. Rizieq Shihab</td>
                                <td>Guru Agama Islam</td>
                            </tr>
                            <tr>
                                <td><img src="assets\kepsek.png" alt="Foto"></td>
                                <td>M. Rizieq Shihab</td>
                                <td>Guru Agama Islam</td>
                            </tr>
                            <tr>
                                <td><img src="assets\kepsek.png" alt="Foto"></td>
                                <td>M. Rizieq Shihab</td>
                                <td>Guru Agama Islam</td>
                            </tr>
                            <tr>
                                <td><img src="assets\kepsek.png" alt="Foto"></td>
                                <td>M. Rizieq Shihab</td>
                                <td>Guru Agama Islam</td>
                            </tr>
                            <tr>
                                <td><img src="assets\kepsek.png" alt="Foto"></td>
                                <td>M. Rizieq Shihab</td>
                                <td>Guru Agama Islam</td>
                            </tr>
                        </tbody>
                    </table class="table-admin">
                    <a href="">Show All</a>
                </div>
            </main>
            <div class="right">
                <div class="top">
                    <button id="menu-btn">
                        <span class="material-symbols-outlined">menu</span>
                    </button>
                </div>
                <div class="wrapper">
                    <header>
                        <p class="current-date"></p>
                        <div class="icons">
                            <span id="prev" class="material-symbols-outlined">chevron_left</span>
                            <span id="next" class="material-symbols-outlined">chevron_right</span>
                        </div>
                    </header>
                    <div class="calendar">
                        <ul class="weeks">
                            <li>Sun</li>
                            <li>Mon</li>
                            <li>Tue</li>
                            <li>Wed</li>
                            <li>Thu</li>
                            <li>Fri</li>
                            <li>Sat</li>
                        </ul>s
                        <ul class="days"></ul>
                    </div>
                </div>
                <div class="berita">
                    <h4 style="margin-bottom: 1rem;">Pengumuman dan Berita</h4>
                    <div class="item">
                        <img src="foto-sekolah.png">
                        <div class="right-berita">
                            <div class="info">
                                <h4>SMPN 4 Tanggerang</h4>
                                <h5>4 November 2023</h5>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="foto-sekolah.png">
                        <div class="right-berita">
                            <div class="info">
                                <h4>SMPN 4 Tanggerang</h4>
                                <h5>4 November 2023</h5>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="foto-sekolah.png">
                        <div class="right-berita">
                            <div class="info">
                                <h4>SMPN 4 Tanggerang</h4>
                                <h5>4 November 2023</h5>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <script>
    const daysTag = document.querySelector(".days"),
    currentDate = document.querySelector(".current-date"),
    prevNextIcon = document.querySelectorAll(".icons span");

// getting new date, current year and month
let date = new Date(),
    currYear = date.getFullYear(),
    currMonth = date.getMonth();

// storing full name of all months in array
const months = ["January", "February", "March", "April", "May", "June", "July",
    "August", "September", "October", "November", "December"];

const renderCalendar = () => {
    let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(), // getting first day of month
        lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(), // getting last date of month
        lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(), // getting last day of month
        lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); // getting last date of previous month
    let liTag = "";

    for (let i = firstDayofMonth; i > 0; i--) { // creating li of previous month last days
        liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
    }

    for (let i = 1; i <= lastDateofMonth; i++) { // creating li of all days of current month
        // adding active class to li if the current day, month, and year matched
        let isToday = i === date.getDate() && currMonth === date.getMonth()
            && currYear === date.getFullYear() ? "active" : "";
        liTag += `<li class="${isToday}">${i}</li>`;
    }

    for (let i = lastDayofMonth; i < 6; i++) { // creating li of next month first days
        liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`
    }
    currentDate.innerText = `${months[currMonth]} ${currYear}`; // passing current mon and yr as currentDate text
    daysTag.innerHTML = liTag;
}
renderCalendar();

prevNextIcon.forEach(icon => { // getting prev and next icons
    icon.addEventListener("click", () => { // adding click event on both icons
        // if clicked icon is previous icon then decrement current month by 1 else increment it by 1
        currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;

        if (currMonth < 0) { // if current month is less than 0
            currMonth = 11; // set it to December
            currYear--; // decrement year
        } else if (currMonth > 11) { // if current month is greater than 11
            currMonth = 0; // set it to January
            currYear++; // increment year
        }

        renderCalendar(); // calling renderCalendar function
    });
});
</script>
@stop
