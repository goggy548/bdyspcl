# Dear Angel — Birthday Scrapbook

A one-page, responsive birthday scrapbook built with PHP, HTML, CSS and JavaScript. It is designed to run locally with XAMPP and does not need a database.

## Project structure

```text
birthday-gift/
├── index.php
├── css/
│   └── style.css
├── js/
│   └── script.js
├── images/
│   ├── photo1.jpeg
│   ├── photo2.jpeg
│   ├── photo3.jpeg
│   ├── photo4.jpeg
│   ├── photo5.jpeg
│   ├── photo6.jpeg
│   ├── photo7.jpeg
│   ├── photo8.jpeg
│   ├── photo9.jpeg
│   └── photo10.jpeg
├── music/
│   └── birthday-song.mp3
└── README.md
```

## Add your photographs

1. Put your ten original JPEG photographs inside the `images` folder.
2. Use these exact names (lowercase, with `.jpeg`):
   `photo1.jpeg`, `photo2.jpeg`, `photo3.jpeg`, `photo4.jpeg`, `photo5.jpeg`,
   `photo6.jpeg`, `photo7.jpeg`, `photo8.jpeg`, `photo9.jpeg`, `photo10.jpeg`.
3. Do not rename the photos to `.jpg` or `.png`.
4. The gallery uses `width: 100%; height: auto; object-fit: contain`, so each image keeps its original aspect ratio. The final section also uses `photo10.jpeg`.
5. If a file is missing, a gentle placeholder appears instead of a broken-image icon.

To change captions, edit the `$photos` array near the top of `index.php`.

## Add background music

1. Add your own MP3 audio file to the `music` folder.
2. Name it exactly `birthday-song.mp3`.
3. Music starts only after the visitor clicks **Open your little surprise**.
4. The floating player offers play/pause and mute/unmute. If the file is missing or cannot play, the rest of the site continues working.

Use music you have permission to use.

## Run with XAMPP

1. Install and open XAMPP.
2. Copy the entire `birthday-gift` folder into XAMPP's `htdocs` directory. For example:
   `C:\xampp\htdocs\birthday-gift\`
3. Open the XAMPP Control Panel and start **Apache**. MySQL is not needed.
4. In your browser, visit:
   `http://localhost/birthday-gift/`
5. Keep the folder structure intact. Do not open `index.php` by double-clicking it; PHP needs Apache to run.

## Included interactions

- One continuous page with sticky navigation and smooth-scroll links.
- Opening gift, note reveal and confetti; music begins only after this interaction.
- Exactly ten gallery entries, photo lightbox and graceful missing-photo placeholders.
- Three memory cards displaying the provided messages exactly as written.
- Interactive envelope and personal letter.
- Five reveal-on-click reason cards and a hidden extra message.
- Cake candles extinguish with a clickable button, smoke/confetti celebration and a one-time disabled state.
- Final photo and replay-to-top button.
- Keyboard support for gift, envelope and modals; Escape closes modals.
- Reduced-motion preference support.

## Notes

- The site uses Google Fonts, Font Awesome and GSAP from CDNs. Those decorative resources require an internet connection. The main layout and interactions are local; the site still works without GSAP.
- No microphone permission is requested or required.
- There is only one PHP page: `index.php`.
