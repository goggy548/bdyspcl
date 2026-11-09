<?php
// Dear Angel — one-page birthday scrapbook.
// Add your own photos to /images using photo1.jpeg ... photo10.jpeg.
$photos = [
    ['file' => 'photo1.jpeg', 'caption' => 'little joys'],
    ['file' => 'photo2.jpeg', 'caption' => 'the best kind of chaos'],
    ['file' => 'photo3.jpeg', 'caption' => 'a day to keep'],
    ['file' => 'photo4.jpeg', 'caption' => 'my favourite people'],
    ['file' => 'photo5.jpeg', 'caption' => 'somewhere in between'],
    ['file' => 'photo6.jpeg', 'caption' => 'the silly moments'],
    ['file' => 'photo7.jpeg', 'caption' => 'a memory in motion'],
    ['file' => 'photo8.jpeg', 'caption' => 'just being us'],
    ['file' => 'photo9.jpeg', 'caption' => 'one for the scrapbook'],
    ['file' => 'photo10.jpeg', 'caption' => 'always worth remembering'],
];
$stories = [
    [
        'title' => 'Until we meet again 🤍',
        'message' => "I don't know when we'll sit together, laugh, gossip and make new memories again. But I hope distance never changes us. Until we meet again, take care of yourself and keep making beautiful memories.\n\nHappy birthday, Angel. I'm so lucky to have you.\n\nLove you always"
    ],
    [
        'title' => 'The day you called me back',
        'message' => "We had a silly fight, and I was already on my bus home. But you called and asked me to get down at the next stop. And I did. We ended up crying in a mall toilet, reminding each other how much we meant to one another."
    ],
    [
        'title' => 'Just us, until midnight',
        'message' => "We were both at our lowest, but somehow we had each other. We texted until midnight, counted down together and welcomed the new year. We weren't having the happiest time, but we made sure neither of us felt alone."
    ],
];
$reasons = [
    "Because you understand me even when I don't explain.",
    "Because our silly moments become my favourite memories.",
    "Because even distance cannot change what we share.",
    "Because you make difficult days feel a little lighter.",
    "Because you're simply YOU, and that's enough."
];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#f8f1e7">
  <meta name="description" content="A little birthday scrapbook made with love for Angel.">
  <title>Dear Angel — A Little Birthday Scrapbook</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&family=Cormorant+Garamond:wght@400;500;600;700&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="paper-grain" aria-hidden="true"></div>
<div class="petal-field" aria-hidden="true"></div>

<nav class="site-nav" aria-label="Main navigation">
  <a class="brand" href="#home" aria-label="Dear Angel home">Dear Angel<span>♡</span></a>
  <button class="nav-toggle" aria-label="Toggle navigation" aria-expanded="false"><i class="fa-solid fa-bars"></i></button>
  <div class="nav-links">
    <a href="#home">Home</a><a href="#birthday">Birthday</a><a href="#gallery">Gallery</a>
    <a href="#memories">Memories</a><a href="#letter">A Letter</a><a href="#cake">Cake</a><a href="#final">Final Surprise</a>
  </div>
</nav>

<main>
  <!-- 1. Opening gift -->
  <section class="chapter opening" id="home">
    <div class="postmark"><span>FOR ANGEL</span></div>
    <div class="opening-flower flower-one">✿</div><div class="opening-flower flower-two">❀</div>
    <div class="opening-inner">
      <p class="eyebrow">a little something, made with love</p>
      <p class="script intro-line">Something special has been kept here for you...</p>
      <div class="gift-wrap" id="gift" role="button" tabindex="0" aria-label="Open the gift">
        <div class="gift-bow"></div><div class="gift-lid"></div><div class="gift-box"><span>♡</span></div>
        <div class="gift-ribbon"></div>
      </div>
      <p class="script recipient">To my favourite person, Angel 🤎</p>
      <button class="btn btn-primary pulse" id="openGift">Open your little surprise <span>♡</span></button>
      <p class="hand-hint"><span class="hint-arrow">↗</span> Tap to open your little surprise</p>
      <div class="gift-note" id="giftNote" aria-live="polite">
        <span class="tiny-label">a note for you</span>
        <p>Made with love, just for you.</p>
      </div>
      <span class="made-label">MADE WITH LOVE · EST. FOREVER</span>
    </div>
  </section>

  <!-- 2. Birthday -->
  <section class="chapter birthday" id="birthday">
    <div class="chapter-top"><span class="chapter-number">01 / THE CELEBRATION</span><span class="scribble">a day all about you ♡</span></div>
    <div class="birthday-card">
      <div class="birthday-copy">
        <p class="eyebrow">today is your day</p>
        <h1>HAPPY BIRTHDAY,<br><em>ANGEL</em></h1>
        <p class="lead">Today, the world celebrates someone who makes mine a little more beautiful.</p>
        <p class="script birthday-script">May this year be gentle, golden and full of lovely little surprises.</p>
        <a class="btn btn-secondary" href="#gallery">Turn the page <span>→</span></a>
      </div>
      <div class="birthday-art" aria-label="Illustration of a birthday cake with candles">
        <div class="cake-sparkle sparkle-a">✧</div><div class="cake-sparkle sparkle-b">✦</div>
        <div class="cake-candles"><i></i><i></i><i></i></div>
        <div class="cake-flames"><b></b><b></b><b></b></div>
        <div class="cake-top"></div><div class="cake-layer layer-top"></div><div class="cake-layer layer-bottom"></div>
        <div class="cake-plate"></div><span class="cake-heart">♡</span>
      </div>
      <div class="postcard-stamp">HAPPY<br>POST DAY</div>
    </div>
    <div class="floating-hearts" aria-hidden="true"><span>♡</span><span>♡</span><span>✧</span></div>
  </section>

  <!-- 3. Gallery -->
  <section class="chapter gallery-section" id="gallery">
    <div class="section-heading">
      <span class="chapter-number">02 / OUR LITTLE ARCHIVE</span>
      <h2>Little moments,<br><em>endless memories.</em></h2>
      <p>Some pictures hold more feelings than words ever could.</p>
      <span class="hand-hint">✦ Tap any photograph to see it up close ✦</span>
    </div>
    <div class="photo-grid">
      <?php foreach ($photos as $i => $photo): ?>
      <button class="polaroid" type="button"
        data-src="images/<?php echo htmlspecialchars($photo['file'], ENT_QUOTES, 'UTF-8'); ?>"
        data-caption="<?php echo htmlspecialchars($photo['caption'], ENT_QUOTES, 'UTF-8'); ?>"
        aria-label="Open photograph <?php echo $i + 1; ?>: <?php echo htmlspecialchars($photo['caption'], ENT_QUOTES, 'UTF-8'); ?>">
        <span class="photo-number"><?php echo str_pad((string)($i + 1), 2, '0', STR_PAD_LEFT); ?></span>
        <span class="tape"></span>
        <span class="photo-frame">
          <img src="images/<?php echo htmlspecialchars($photo['file'], ENT_QUOTES, 'UTF-8'); ?>"
               alt="Friendship memory <?php echo $i + 1; ?>" loading="lazy">
          <span class="photo-placeholder"><i class="fa-regular fa-image"></i><small>Add <?php echo htmlspecialchars($photo['file'], ENT_QUOTES, 'UTF-8'); ?></small></span>
        </span>
        <span class="photo-caption"><?php echo htmlspecialchars($photo['caption'], ENT_QUOTES, 'UTF-8'); ?></span>
      </button>
      <?php endforeach; ?>
    </div>
    <div class="section-footer"><span class="script">kept close, always ♡</span><a class="text-link" href="#memories">Next: the stories I keep <span>→</span></a></div>
  </section>

  <!-- 4. Stories -->
  <section class="chapter memories-section" id="memories">
    <div class="section-heading">
      <span class="chapter-number">03 / BETWEEN THE LINES</span>
      <h2>Some memories<br><em>never leave us.</em></h2>
      <p>Three little stories, a lifetime of feelings.</p>
      <span class="hand-hint">There's a little memory hidden inside each card — tap to open ♡</span>
    </div>
    <div class="story-grid">
      <?php foreach ($stories as $i => $story): ?>
      <button class="story-card" type="button" data-story="<?php echo $i; ?>">
        <span class="story-stamp">♡</span><span class="story-index">LETTER NO. 0<?php echo $i + 1; ?></span>
        <span class="script story-title"><?php echo htmlspecialchars($story['title'], ENT_QUOTES, 'UTF-8'); ?></span>
        <span class="story-cta">Tap to unfold <i class="fa-solid fa-arrow-right"></i></span>
      </button>
      <?php endforeach; ?>
    </div>
    <div class="pressed-flower">❀</div>
  </section>

  <!-- 5. Personal letter -->
  <section class="chapter letter-section" id="letter">
    <div class="section-heading">
      <span class="chapter-number">04 / SOMETHING FROM MY HEART</span>
      <h2>A letter, <em>just for you.</em></h2>
      <p>Some things deserve real paper. This one is for you.</p>
    </div>
    <div class="letter-experience">
      <div class="envelope" id="envelope" role="button" tabindex="0" aria-label="Open the birthday letter">
        <div class="envelope-back"></div><div class="envelope-paper"><span class="script">My dearest Angel,</span><span class="paper-lines"></span></div>
        <div class="envelope-flap"></div><div class="wax-seal">A</div>
        <span class="envelope-hint script">Open your letter 💌</span>
      </div>
      <div class="letter-content" id="personalLetter" aria-live="polite">
        <p class="script">Happy birthday, my Angel. 🤎</p>
        <p>I don't think words will ever be enough to explain how grateful I am to have you in my life.</p>
        <p>Thank you for every laugh, every silly conversation, every late-night message and every moment when you made life feel a little less difficult.</p>
        <p>No matter where life takes us, I hope we always find our way back to each other.</p>
        <p>Keep smiling, keep dreaming and never forget how loved you are.</p>
        <p>Happy birthday once again.</p>
        <p class="script">Love you always. ♡</p>
      </div>
    </div>
    <div class="reasons-wrap">
      <h3>Five little reasons <em>why you're special</em></h3>
      <p class="hand-hint">Tap each little card to reveal a reason.</p>
      <div class="reason-grid">
        <?php foreach ($reasons as $i => $reason): ?>
        <button class="reason-card" type="button" data-reason="<?php echo $i; ?>">
          <span class="reason-front"><span class="reason-number">0<?php echo $i + 1; ?></span><span class="script">A little reason...</span><span class="tap-label">tap to reveal ♡</span></span>
          <span class="reason-back"><?php echo htmlspecialchars($reason, ENT_QUOTES, 'UTF-8'); ?></span>
        </button>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="hidden-surprise">
      <button class="btn btn-secondary" id="oneMore">One more thing... <span>♡</span></button>
      <p class="hidden-message" id="hiddenMessage">Distance can keep us apart, but it can never erase the memories we've made. I'm always cheering for you.</p>
    </div>
  </section>

  <!-- 6. Cake -->
  <section class="chapter cake-section" id="cake">
    <div class="section-heading">
      <span class="chapter-number">05 / MAKE A WISH</span>
      <h2>Your birthday cake <em>is ready, Angel!</em></h2>
      <p>Make a wish, birthday girl! ✨</p>
    </div>
    <div class="cake-stage">
      <div class="cake-decoration decor-left">✿</div><div class="cake-decoration decor-right">♡</div>
      <div class="interactive-cake" aria-label="Birthday cake with three candles">
        <div class="candle-row"><div class="candle"><span class="flame"></span><span class="wick"></span></div><div class="candle"><span class="flame"></span><span class="wick"></span></div><div class="candle"><span class="flame"></span><span class="wick"></span></div></div>
        <div class="frosting drip-top"></div><div class="cake-tier tier-one"></div><div class="frosting drip-bottom"></div><div class="cake-tier tier-two"></div>
        <div class="cake-decoration-hearts">♡ &nbsp; ✧ &nbsp; ♡</div><div class="cake-stand"></div>
      </div>
      <p class="script wish-message" id="wishMessage">Your birthday cake is ready, Angel! ✨</p>
      <button class="btn btn-primary pulse" id="blowCandles">♡ Blow out the candles! ♡</button>
      <p class="hand-hint" id="wishHint">Make a wish before you blow them out ✨</p>
      <div class="celebration-message" id="celebrationMessage" aria-live="polite">
        <h3>Your wish is on its way! ✨🤍</h3>
        <p>You did it, birthday girl! May all your wishes come true.</p>
        <a class="btn btn-secondary" href="#final">One last surprise <span>→</span></a>
      </div>
      <div class="confetti-layer" id="confettiLayer" aria-hidden="true"></div>
    </div>
  </section>

  <!-- 7. Final -->
  <section class="chapter final-section" id="final">
    <span class="chapter-number">06 / UNTIL OUR NEXT MEMORY</span>
    <div class="final-scrap">
      <div class="final-photo">
        <img src="images/photo10.jpeg" alt="One last favourite memory with Angel" loading="lazy">
        <span class="photo-placeholder"><i class="fa-regular fa-image"></i><small>Add photo10.jpeg</small></span>
        <span class="script">one to keep forever</span>
      </div>
      <div class="final-copy">
        <p class="eyebrow">and this is not the end...</p>
        <h2>Maybe we don't know when we'll meet again...</h2>
        <p class="final-line">But I know there are still so many memories waiting for us.</p>
        <p>Until then, keep smiling, keep growing, and keep being the beautiful person you are.</p>
        <div class="final-signoff">
          <h2>Happy Birthday, Angel 🤎</h2>
          <p class="script">Love you always.</p>
        </div>
        <button class="btn btn-primary" id="replay">Replay Our Little Story <span>↗</span></button>
      </div>
    </div>
    <div class="final-foot">
    MADE WITH A WHOLE LOT OF LOVE, <span>♡</span>
</div>

<div class="from-signature">From Pooja ♡</div>

<div class="final-sparkles" aria-hidden="true">✧　♡　✦　♡　✧</div>
  </section>
</main>

<footer><span>for Angel, with love</span><span> From Pooja</span></footer>

<!-- Gallery lightbox -->
<div class="modal lightbox" id="lightbox" aria-hidden="true" role="dialog" aria-modal="true" aria-label="Photograph preview">
  <button class="modal-close" type="button" aria-label="Close photograph"><i class="fa-solid fa-xmark"></i></button>
  <figure><img id="lightboxImage" src="" alt=""><figcaption id="lightboxCaption"></figcaption></figure>
</div>
<!-- Story modal -->
<div class="modal story-modal" id="storyModal" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="storyModalTitle">
  <button class="modal-close" type="button" aria-label="Close memory"><i class="fa-solid fa-xmark"></i></button>
  <article class="unfolded-letter"><span class="tiny-label">A MEMORY TO KEEP</span><h3 id="storyModalTitle"></h3><p id="storyModalText"></p><span class="script">tucked safely in my heart ♡</span></article>
</div>

<audio id="backgroundMusic" src="music/birthday-song.mp3" loop preload="none"></audio>
<div class="music-control" id="musicControl" hidden>
  <button id="musicToggle" type="button" aria-label="Play background music"><i class="fa-solid fa-play"></i></button>
  <span>our little soundtrack</span>
  <button id="musicMute" type="button" aria-label="Mute music"><i class="fa-solid fa-volume-high"></i></button>
</div>
<div class="toast" id="toast" role="status" aria-live="polite"></div>
<script>
window.scrapbookStories = <?php echo json_encode($stories, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT); ?>;
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" defer></script>
<script src="js/script.js" defer></script>
</body>
</html>
