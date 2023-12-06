@extends('layouts.admin')

@section('content')
<div class="homeadmin-container">
    <div class="homeadmin-left">
    <div class="homeadmin-left-top">
    <h1>Selamat Datang, Admin</h1>
    <img src="/assets/foto-sekolah.webp" alt="banner">
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
                    @foreach($pengajars as $pengajar)
                    <tr>
                        <td><img class="pengajar-admin-photo" src="{{ asset('storage/' . $pengajar->photo) }}" alt="{{ $pengajar->name }}" ></td>
                        <td>{{ $pengajar->name }}</td>
                        <td>{{ $pengajar->jabatan }}</td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            <div class="admin-more-btn" style="margin-bottom: 10px; margin-top: 20px;">
            <button><a href="/admin/pengajar">More</a></button>
        </div>
        </div>
    </div>
    <div class="homeadmin-right">
    <div class="clock-container">
        <p id="real-time-clock"></p>
    </div>
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
        <!-- <div class="homeadmin-berita">
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
        </div> -->
    </div>
</div>
    
        <script>
            function updateClock() {
    const now = new Date();
    const hours = now.getHours().toString().padStart(2, '0');
    const minutes = now.getMinutes().toString().padStart(2, '0');
    const seconds = now.getSeconds().toString().padStart(2, '0');

    const clockText = `${hours}:${minutes}:${seconds}`;
    document.getElementById('real-time-clock').textContent = clockText;
}

// Update the clock every second
setInterval(updateClock, 1000);

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
@php
$title = 'Home Admin';
@endphp