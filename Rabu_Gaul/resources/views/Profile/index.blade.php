<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Hasan NAW Portofolio Digital</title>
        <link rel="stylesheet" href=" {{ asset('css/style.css') }}">
    </head>
    <body>
        <nav class="navbar">
            <div class="logo">Hansss.NAW</div>
            <ul>
                <li><a href="#hero">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#skill">Kemampuan</a></li>
                <li><a href="#sertifikat">Sertifikat</a></li>
                <li><a href="#project">Projek</a></li>
                <li><a href="#contact">Kontak Saya</a></li>
            </ul>
        </nav>
        <section id="hero">
            <h1>Haii, saya Hasan Nur Adhi Wibowo</h1>
            <p>Siswa RPL yang senang mengeksplorasi ide, melakukan riset, dan menciptakan solusi melalui teknologi.</p>
        </section>
        <section id="about">
            <div>
                <h2>Tentang Saya</h2>
                <p>Saya adalah siswa Rekayasa Perangkat Lunak (RPL) yang memiliki ketertarikan pada teknologi dan pemrograman. Saya suka mengeksplorasi hal-hal baru, mencari ide, melakukan riset, serta memberikan saran untuk menemukan cara yang lebih baik dalam menyelesaikan suatu masalah. Saya juga senang mengembangkan ide menjadi sebuah proyek atau solusi digital yang bermanfaat. Melalui berbagai proses belajar dan proyek yang saya kerjakan, saya terus berusaha mengembangkan kemampuan dan mendapatkan pengalaman baru di dunia teknologi.</p>
            </div>
            <div class="about-photo"><img src="{{ asset('sertif/sucipto-my-little-hiu.jpeg') }}" alt="Foto Hasan NAW"></div>
        </section>
        <section id="skill">
            <h2>Kemampuan</h2>
            <h3>Bahasa Pemrograman</h3>
            <div class="skill-grid">
                <div class="skill-card"><img src="{{ asset('logo-skill/logo-html.png') }}" alt="HTML"><span>HTML</span></div>
                <div class="skill-card"><img src="{{ asset('logo-skill/logo-javaskrip.png') }}" alt="Java"><span>Java</span></div>
                <div class="skill-card"><img src="{{ asset('logo-skill/logo-piton.png') }}" alt="Python"><span>Python</span></div>
                <div class="skill-card"><img src="{{ asset('logo-skill/logo-php.webp') }}" alt="PHP"><span>PHP</span></div>
                <div class="skill-card"><img src="{{ asset('logo-skill/logo-C%23.webp') }}" alt="C#"><span>C#</span></div>
                <div class="skill-card"><img src="{{ asset('logo-skill/logo-kotlin.png') }}" alt="Kotlin"><span>Kotlin</span></div>
                <div class="skill-card"><img src="{{ asset('logo-skill/logo-shell.png') }}" alt="Shell"><span>Shell</span></div>
                <div class="skill-card"><img src="{{ asset('logo-skill/logo-dart.png') }}" alt="Dart"><span>Dart</span></div>
                <div class="skill-card"><img src="{{ asset('logo-skill/logo-vb.webp') }}" alt="VB.NET"><span>VB.NET</span></div>
            </div>
            <h3>Sistem Operasi</h3>
            <div class="os-grid">
                <div class="os-card"><img src="{{ asset('logo-os/Logo_Windows_11.webp') }}" alt="Windows"><span>Windows</span></div>
                <div class="os-card"><img src="{{ asset('logo-os/logo-ubuntu.webp') }}" alt="Ubuntu"><span>Ubuntu</span></div>
                <div class="os-card"><img src="{{ asset('logo-os/logo-zorin.png') }}" alt="Zorin"><span>Zorin OS</span></div>
                <div class="os-card"><img src="{{ asset('logo-os/logo-fedora.webp') }}" alt="Fedora"><span>Fedora</span></div>
                <div class="os-card"><img src="{{ asset('logo-os/logo-arch.png') }}" alt="Arch"><span>Arch Linux</span></div>
            </div>
            <h3>Framework/Libary</h3>
            <div class="fm-grid">
                <div class="fm-card">Laravel</div>
                <div class="fm-card">Flutter</div>
                <div class="fm-card">React.js</div>
                <div class="fm-card">Node.js</div>
                <div class="fm-card">Tailwind CSS</div>
            </div>
            <h3>Databases</h3>
            <div class="db-grid">
                <div class="db-card">MySQL</div>
                <div class="db-card">SQLite</div>
                <div class="db-card">SawitDB</div>
            </div>
            <h3>Tools</h3>
            <div class="tool-grid">
                <div class="tool-card">VS Code</div>
                <div class="tool-card">Antigravity</div>
                <div class="tool-card">git</div>
                <div class="tool-card">Github</div>
                <div class="tool-card">Android Studio</div>
                <div class="tool-card">XAMPP</div>
                <div class="tool-card">Laragon</div>
            </div>
        </section>
        <section id="sertifikat">
            <h2>Sertifikat</h2>
            <div class="sert-grid">
                <div class="sert-card">
                    <div class="sert-sheet"><img src="{{ asset('sertif/sertif-dataScience-dicoding.png') }}" alt="Sertifikat Data Science"></div>
                    <div class="sert-info">
                        <h3>Selesai Belajar Data Science</h3>
                        <p>Dicoding Indonesia - 2026</p>
                    </div>
                </div>
                <div class="sert-card">
                    <div class="sert-sheet"><img src="{{ asset('sertif/sertif-python-dicoding.png') }}" alt="Sertifikat Python Learning"></div>
                    <div class="sert-info">
                        <h3>Python Learning</h3>
                        <p>Dicoding Indonesia - 2026</p>
                    </div>
                </div>
                <div class="sert-card">
                    <div class="sert-sheet"><img src="{{ asset('sertif/setif-SQL-dicoding.png') }}" alt="Sertifikat SQL"></div>
                    <div class="sert-info">
                        <h3>Belajar Dasar Structured Query Language (SQL)</h3>
                        <p>Dicoding Indonesia - 2026</p>
                    </div>
                </div>
                <div class="sert-card">
                    <div class="sert-sheet"><img src="{{ asset('sertif/sertif-financialLiterasi-dicoding.png') }}" alt="Sertifikat Financial Literacy"></div>
                    <div class="sert-info">
                        <h3>Introduction to Financial Literacy</h3>
                        <p>Dicoding Indonesia - 2026</p>
                    </div>
                </div>
                <div class="sert-card">
                    <div class="sert-sheet"><img src="{{ asset('sertif/free-code-camp.png') }}" alt="Sertifikat Foundational C# with Microsoft"></div>
                    <div class="sert-info">
                        <h3>Foundational C# with Microsoft</h3>
                        <p>Free Code Camp - 2025</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="project">
            <h2>Projek</h2>
            <div class="project-grid">
                <div class="project-card">
                    <div class="project-tampilan"></div>
                    <div class="project-inpo">
                        <h3>Aplikasi sistem UKS yang berbasis Windows Forms App</h3>
                        <p>Aplikasi ini dugnakan oleh pengelola uks untuk mendata jumlah pasien dan jumlah data apaun yang ada di dalam uks dengan mudah dan rapi.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact">
            <h2>Kontak Saya</h2>
            <a href="https://github.com/hasannuradhiwibowoo">Github Saya</a>
            <a href="https://www.instagram.com/hansss.naw?utm_source=ig_web_button_share_sheet&stkn=ZDNlZDc0MzIxNw==">Instagram Saya</a>
        </section>
    </body>
</html>
