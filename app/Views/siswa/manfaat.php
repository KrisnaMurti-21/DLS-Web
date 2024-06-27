<?= $this->extend('/siswa/layout/page_layout') ?>

<?= $this->section('content') ?>

<!-- Judul Macam Gaya -->
<div class="container mt-5">
    <div class="row j-gaya">
        <h2>Manfaat Mengetahui Gaya Belajar</h2>
    </div>
</div>
<!-- End Judul Macam Gaya -->

<!-- Gaya Belajar Aktif Reflektif -->
<div class="container mt-5">
    <div class="row">
        <div class="col-8 gb">
            <div class="tulisan">
                <p class="gb-p mt-4 mb-4" style="text-align: justify;">
                    Mengetahui gaya belajar Anda dapat memberikan manfaat yang signifikan dalam belajar dan memahami materi secara lebih efektif. Beberapa manfaat dari mengetahui gaya belajar Anda adalah:
                </p>
                <ul class=" gb-p mt-4 mb-4" style="text-align: justify;">
                    <li>Meningkatkan efektivitas belajar: Dengan mengetahui gaya belajar Anda, Anda dapat menyesuaikan cara belajar yang paling efektif bagi diri Anda sendiri. Misalnya, jika Anda adalah visual learner, maka membuat diagram atau mind map dapat membantu Anda memahami dan mengingat informasi lebih baik daripada hanya membaca teks.</li>
                    <li>Memaksimalkan waktu belajar: Dengan memilih strategi belajar yang tepat, Anda dapat menghemat waktu belajar dan meningkatkan efisiensi. Misalnya, jika Anda adalah auditory learner, maka merekam diri sendiri membacakan catatan dapat membantu Anda memahami dan mengingat informasi lebih cepat daripada hanya membaca ulang.</li>
                    <li>Mengurangi stres dan frustrasi: Mengetahui gaya belajar Anda dapat membantu Anda merasa lebih percaya diri dan mengurangi stres dalam belajar. Misalnya, jika Anda tahu bahwa Anda adalah kinesthetic learner, maka Anda dapat mengambil lebih banyak waktu untuk melakukan eksperimen dan latihan praktis daripada hanya membaca teks atau menonton video.</li>
                    <li>Meningkatkan kemampuan memecahkan masalah: Dengan mengetahui gaya belajar Anda, Anda dapat mengembangkan kemampuan memecahkan masalah dengan cara yang paling efektif untuk diri Anda sendiri. Misalnya, jika Anda adalah visual learner, maka membuat sketsa atau diagram dapat membantu Anda memecahkan masalah secara lebih efektif daripada hanya berpikir secara verbal.</li>
                </ul>
            </div>
        </div>
        <div class=" col-4 image-gbs">
            <img style="width: 100%;" src="<?= base_url('assets/img/Graduation-rafiki 1.png') ?>" alt="image-gb" />
        </div>
    </div>
    <div class="row">
        <div class="col tulisan gb">
            <p class="gb-p" style="text-align: justify;">
                Dalam kesimpulannya, mengetahui gaya belajar Anda dapat membantu meningkatkan efektivitas belajar, memaksimalkan waktu belajar, mengurangi stres dan frustrasi, serta meningkatkan kemampuan memecahkan masalah. Oleh karena itu, sangat penting untuk memahami gaya belajar Anda dan menyesuaikan cara belajar Anda untuk mencapai hasil yang lebih baik dalam belajar.
            </p>
        </div>
    </div>
</div>
<!-- End of Gaya Belajar AR -->


<?= $this->endSection() ?>