<section class="text-runner">
    <div class="container-lg max-w-screen-xl mx-auto text-runner-wrapper">
        <div class="title">
            <div class="text">ព័ត៌មានថ្មីបំផុត</div>
            <span class="corner"></span>
        </div>
        <marquee onmouseover="this.stop();" onmouseout="this.start();">
            <a href="#"> កំពង់ឆ្នាំង៖ នៅថ្ងៃអាទិត្យ ១៥កើត ខែអស្សុជ ឆ្នាំថោះ បញ្ចស័ក ព.ស២៥៦៧
                ត្រូវនឹងថ្ងៃទី២៩ ខែតុលា ឆ្នាំ២០២៣ ដោយមានការណែនាំពីលោកឧត្តមសេនីយ៍ទោ ខូវ លី ស្នងការនគរបាលខេត្តកំពង់ឆ្នាំង
                កម្លាំងនៃអធិការដ្ឋាននគរបាលក្រុង-ស្រុក បានចុះធ្វើការផ្សព្វផ្សាយអំពីគោលនយោបាយ ភូមិ ឃុំ សង្កាត់
                មានសុវត្ថិភាព ដើម្បីបង្ការ ក៏ដូចជាកាត់បន្ថយបទល្មើសតាមមូលដ្ឋាន កម្លាំងបានចុះសម្រួលចរាចរណ៍ជូនលោកគ្រូ
                អ្នកគ្រូ សិស្សានុសិស្ស ពេលចូល ចេញ ពីសាលារៀន។</a>
                <a href="#"> កំពង់ធំ៖ នៅថ្ងៃអាទិត្យ ១៥កើត ខែអស្សុជ ឆ្នាំថោះ បញ្ចស័ក ព.ស២៥៦៧
                ត្រូវនឹងថ្ងៃទី២៩ ខែតុលា ឆ្នាំ២០២៣ ដោយមានការណែនាំពីលោកឧត្តមសេនីយ៍ទោ ខូវ លី ស្នងការនគរបាលខេត្តកំពង់ឆ្នាំង
                កម្លាំងនៃអធិការដ្ឋាននគរបាលក្រុង-ស្រុក បានចុះធ្វើការផ្សព្វផ្សាយអំពីគោលនយោបាយ ភូមិ ឃុំ សង្កាត់
                មានសុវត្ថិភាព ដើម្បីបង្ការ ក៏ដូចជាកាត់បន្ថយបទល្មើសតាមមូលដ្ឋាន កម្លាំងបានចុះសម្រួលចរាចរណ៍ជូនលោកគ្រូ
                អ្នកគ្រូ សិស្សានុសិស្ស ពេលចូល ចេញ ពីសាលារៀន។</a>
        </marquee>
        <div id="time-clock" class="clock"></div>
    </div>
</section>

<script type="module">
    function updateTime() {
        var currentTime = new Date();
        var hours = currentTime.getHours();
        var minutes = currentTime.getMinutes();
        var seconds = currentTime.getSeconds();
        var amOrPm = hours >= 12 ? "ល្ងាច" : "ព្រឹក";

        if (hours > 12) {
            hours = hours - 12;
        }

        hours = String(hours).padStart(2, "0");
        minutes = String(minutes).padStart(2, "0");
        seconds = String(seconds).padStart(2, "0");

        var formattedTime = hours + ":" + minutes + ":" + seconds + " " + amOrPm;
        document.getElementById('time-clock').innerHTML = formattedTime;
    }

    updateTime();
    setInterval(updateTime, 1000);
</script>
