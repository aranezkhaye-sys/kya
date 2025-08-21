<?php
// loveletter.php
$to = "Dear Danica";
$from = "Kya";
$message = "I don’t know how to start this, and I’m not sure how you’ll react—but like I said, I’ll swallow my pride as long as it’s about you. 
When I first met you, I honestly thought you were kind of aloof and a bit cold. That’s why I hesitated to ask for your ig—I figured you wouldn’t give it anyway. You just seemed like such a private person.
But I was surprised—when I asked, you actually gave it. I thought that would be the end of it, but then you replied to one of my notes, and that really caught me off guard. I never imagined we’d end up getting close.
We had so much in common—we got along so well, and our interests were almost the same in everything. So I won’t deny it… that’s why I got attached to you.
I honestly thought our closeness would stop there, but I was even more surprised when the way I talked to you started to change. It felt so different from how I talk to any of my friends here. Eventually, I even started calling you asawa ko.
I don’t know if you still remember the first day I called you cute, but that day meant so much to me—because I think that’s when I started liking you. It’s hard to believe, even now, but it’s true.
You ask why I find everything you do cute. It’s because whenever I say you’re cute, I’m really saying I like you. So whenever you say or do something that feels cute to me, and I tell you ‘ang cute mo,’ what I’m actually saying is—I like you.
I don’t know where all of this is going, and honestly, I’m feeling shy saying it—but everything I’ve said is true. I like you, Nini. I don’t care if you don’t feel the same. Just being able to tell you how I feel… that’s enough for me.
It’s probably hard to believe, right? We’ve only known each other for about a month, and here I am saying all this. But can you really blame me? I think anyone who gets to know you and grows close to you would have a big chance of falling for you.
I’m scared of what this might do to us… but more than that, I’m scared of what you’ll say. What if it’s not what I’m hoping for? I don’t know… huhu. I always tell you to marry me—not because I’m joking, but because that’s truly how I feel. But before anything like that, there’s something I want to say… or ask. Can I court you? Ligaw muna, right, before marriage? We’re not even officially together yet. And honestly, I still don’t know what your answer will be… so I really don’t know what I’m supposed to do next.
All I know—and what I’m sure of—is that ever since you came into my life, everything started to feel okay. I found a reason to be happy. So much has changed since you arrived… it truly feels like you were a blessing I didn’t see coming—but one I’m so grateful for. Thank you for coming into my life. Thank you for bringing back the part of me that was tired and worn out. Thank you for existing.
Let everything else in the world disappear—just not you. I could forget everything, except what we’ve shared. There’s nothing in my life I’d ever want to change, because every moment led me to meeting you. I’m so incredibly happy I got to know you… more than you could ever imagine. And just so you know—I’m truly serious about marrying you someday.
I may not have said it back to you before, but I love you—more than anything, more than everything.
You’re so beautiful—
not just in the way the world sees you,
but in every part of who you are.
Your soul, your kindness,
the quiet strength in how you carry yourself—
it’s all breathtaking. I’m truly afraid of what your answer might be—
but I won’t regret this.
Not a single word.
Not a single feeling.
Because loving you,
even in silence,
even without knowing what comes next,
has already made my heart feel more alive
than it ever has before. maghihintay 
me sa sagot mooo</p>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Love Letter Card</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      min-height: 100vh;
      background: linear-gradient(135deg, #001f4d 60%, #ff69b4 100%);
      font-family: 'Quicksand', 'Georgia', serif;
      margin: 0;
      padding: 0;
      overflow: auto;
      /* Remove flex centering for scroll */
    }
    .bg-danica {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%) rotate(-20deg);
      font-size: 18vw;
      font-family: 'Pacifico', cursive;
      color: #ff69b4;
      opacity: 0.45;
      pointer-events: none;
      text-shadow: 0 8px 32px #fff, 0 2px 16px #ff69b4;
      z-index: 1;
      user-select: none;
      white-space: nowrap;
    }
    .bg-shape {
      position: fixed;
      border-radius: 50%;
      opacity: 0.18;
      pointer-events: none;
      z-index: 0;
      filter: blur(2px);
      animation: floatShape 12s infinite linear;
    }
    .bg-wave {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100vw;
      height: 180px;
      z-index: 0;
      pointer-events: none;
      opacity: 0.22;
    }
    .bg-stars {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      z-index: 0;
      pointer-events: none;
    }
    @keyframes floatShape {
      0% { transform: translateY(0); }
      100% { transform: translateY(-40px); }
    }
    /* Heart button styles */
    .heart-btn {
      position: fixed;
      z-index: 2;
      width: 70px;
      height: 70px;
      background: #ff69b4;
      border: none !important;
      border-radius: 50%;
      box-shadow: 0 4px 16px rgba(0,0,0,0.12);
      cursor: pointer;
      outline: none;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.2s;
      animation: none;
    }
    .heart-btn:hover {
      transform: scale(1.08);
      background: #ff85c2;
    }
    .heart-icon {
      font-size: 2.6em;
      color: #fff;
      text-shadow: 0 2px 8px #ff69b4;
      pointer-events: none;
    }
    @media (max-width: 600px) {
      .bg-danica { font-size: 28vw; }
      .heart-btn { width: 60px; height: 60px; }
    }
    @media (max-width: 400px) {
      .bg-danica { font-size: 38vw; }
      .heart-btn { width: 50px; height: 50px; }
    }
  </style>
</head>
<body>
  <div class="bg-danica">danica</div>
  <!-- Decorative wave SVG -->
  <svg class="bg-wave" viewBox="0 0 1440 180" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill="#fff0f5" fill-opacity="1" d="M0,96L60,101.3C120,107,240,117,360,128C480,139,600,149,720,144C840,139,960,117,1080,117.3C1200,117,1320,139,1380,149.3L1440,160L1440,180L1380,180C1320,180,1200,180,1080,180C960,180,840,180,720,180C600,180,480,180,360,180C240,180,120,180,60,180L0,180Z"></path>
  </svg>
  <!-- Decorative stars -->
  <div class="bg-stars">
    <script>
      for(let i=0;i<40;i++){
        let star=document.createElement('div');
        star.style.position='absolute';
        star.style.left=Math.random()*100+'vw';
        star.style.top=Math.random()*100+'vh';
        star.style.width=star.style.height=(2+Math.random()*3)+'px';
        star.style.background='#fff';
        star.style.borderRadius='50%';
        star.style.opacity='0.7';
        star.style.filter='blur(0.5px)';
        document.querySelector('.bg-stars').appendChild(star);
      }
    </script>
  </div>
  <button class="heart-btn" id="showLetterBtn">
    <span class="heart-icon">&#10084;</span>
  </button>
  <div id="letterBox" style="display:none;position:relative;z-index:3;margin:60px auto 30px auto;max-width:420px;background:linear-gradient(135deg,#fff0f5 70%,#ffb7c5 100%);border-radius:18px;box-shadow:0 4px 16px rgba(0,0,0,0.12);padding:24px 18px;text-align:center;font-family:'Quicksand',sans-serif;color:#d6336c;font-size:1.1em;overflow:hidden;">
    <div id="fireflyLetterBg" style="position:absolute;top:0;left:0;width:100%;height:100%;z-index:1;pointer-events:none;"></div>
    <div style="position:relative;z-index:2;">
      <h2 style="font-family:'Pacifico',cursive;color:#d6336c;margin-bottom:12px;">Dear Danica</h2>
      <p style="margin:0 0 18px 0;">I don’t know how to start this, and I’m not sure how you’ll react—but like I said, I’ll swallow my pride as long as it’s about you.<br>When I first met you, I honestly thought you were kind of aloof and a bit cold. That’s why I hesitated to ask for your ig—I figured you wouldn’t give it anyway. You just seemed like such a private person.<br>But I was surprised—when I asked, you actually gave it. I thought that would be the end of it, but then you replied to one of my notes, and that really caught me off guard. I never imagined we’d end up getting close.<br>We had so much in common—we got along so well, and our interests were almost the same in everything. So I won’t deny it… that’s why I got attached to you.
<br>I honestly thought our closeness would stop there, but I was even more surprised when the way I talked to you started to change. It felt so different from how I talk to any of my friends here. Eventually, I even started calling you asawa ko.<br>You ask why I find everything you do cute. It’s because whenever I say you’re cute, I’m really saying I like you. So whenever you say or do something that feels cute to me, and I tell you ‘ang cute mo,’ what I’m actually saying is—I like you.
<br>I don’t know where all of this is going, and honestly, I’m feeling shy saying it—but everything I’ve said is true. I like you, Nini. I don’t care if you don’t feel the same. Just being able to tell you how I feel… that’s enough for me.<br>It’s probably hard to believe, right? We’ve only known each other for about a month, and here I am saying all this. But can you really blame me? I think anyone who gets to know you and grows close to you would have a big chance of falling for you.
<br>I’m scared of what this might do to us… but more than that, I’m scared of what you’ll say. What if it’s not what I’m hoping for? I don’t know… huhu.
<br>I always tell you to marry me—not because I’m joking, but because that’s truly how I feel. But before anything like that, there’s something I want to say… or ask. Can I court you? Ligaw muna, right, before marriage? We’re not even officially together yet. And honestly, I still don’t know what your answer will be… so I really don’t know what I’m supposed to do next.
<br>All I know—and what I’m sure of—is that ever since you came into my life, everything started to feel okay. I found a reason to be happy. So much has changed since you arrived… it truly feels like you were a blessing I didn’t see coming—but one I’m so grateful for. Thank you for coming into my life. Thank you for bringing back the part of me that was tired and worn out. Thank you for existing.
<br>Let everything else in the world disappear—just not you. I could forget everything, except what we’ve shared. There’s nothing in my life I’d ever want to change, because every moment led me to meeting you. I’m so incredibly happy I got to know you… more than you could ever imagine. And just so you know—I’m truly serious about marrying you someday.
<br>I may not have said it back to you before, but I love you—more than anything, more than everything.
<br>You’re so beautiful—
not just in the way the world sees you,
but in every part of who you are.
Your soul, your kindness,
the quiet strength in how you carry yourself—
it’s all breathtaking.<br>I’m truly afraid of what your answer might be—
but I won’t regret this.
Not a single word.
Not a single feeling.
Because loving you,
even in silence,
even without knowing what comes next,
has already made my heart feel more alive
than it ever has before.<br>maghihintay me sa sagot mooo</p>
      <div style="font-family:'Pacifico',cursive;color:#a61e4d;font-size:1em;">— Kya</div>
    </div>
  </div>
  <!-- Spotify widget for Ikot by Over October -->
  <div style="width:100%;display:flex;justify-content:center;margin-top:24px;">
    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/55eWkBMyr3bAHVVE1SLmDE?utm_source=generator&theme=0" width="100%" height="152" frameborder="0" allowfullscreen allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
  </div>
  <audio id="bgMusic" src="https://cdn.pixabay.com/audio/2022/10/16/audio_12b6b9b7b2.mp3" loop preload="auto" style="display:none;"></audio>
  <script>
    // Add decorative background shapes
    const colors = ['#ff69b4', '#fff', '#00ffff', '#d6336c'];
    for(let i=0;i<12;i++){
      let shape=document.createElement('div');
      shape.className='bg-shape';
      shape.style.width=shape.style.height=(80+Math.random()*120)+'px';
      shape.style.left=Math.random()*100+'vw';
      shape.style.top=Math.random()*100+'vh';
      shape.style.background=colors[Math.floor(Math.random()*colors.length)];
      shape.style.animationDuration=(8+Math.random()*8)+'s';
      document.body.appendChild(shape);
    }
    // Animated floating fireflies
    for(let i=0;i<30;i++){
      let firefly=document.createElement('div');
      firefly.style.position='fixed';
      firefly.style.left=Math.random()*100+'vw';
      firefly.style.top=Math.random()*100+'vh';
      firefly.style.width=firefly.style.height=(4+Math.random()*4)+'px';
      firefly.style.background='#fff200';
      firefly.style.borderRadius='50%';
      firefly.style.opacity=0.7;
      firefly.style.boxShadow='0 0 16px 4px #fff200, 0 0 32px 8px #fff20055';
      firefly.style.pointerEvents='none';
      firefly.style.animation=`floatFirefly ${5+Math.random()*8}s infinite ease-in-out`;
      firefly.style.zIndex='0';
      document.body.appendChild(firefly);
    }
    // Firefly animation
    const style=document.createElement('style');
    style.innerHTML+=`@keyframes floatFirefly {0%{transform:translateY(0) scale(1);}50%{transform:translateY(-40px) scale(1.2);}100%{transform:translateY(0) scale(1);}}`;
    document.head.appendChild(style);
    // Remove animated flying butterflies
    // Floating button anywhere on screen
    const btn = document.getElementById('showLetterBtn');
    let x = Math.random() * (window.innerWidth - 90), y = Math.random() * (window.innerHeight - 60);
    btn.style.left = x + 'px';
    btn.style.top = y + 'px';
    function randomFloat() {
      x += (Math.random()-0.5)*40;
      y += (Math.random()-0.5)*40;
      x = Math.max(0, Math.min(window.innerWidth-90, x));
      y = Math.max(0, Math.min(window.innerHeight-60, y));
      btn.style.left = x + 'px';
      btn.style.top = y + 'px';
    }
    let floatInterval = setInterval(randomFloat, 1800);
    btn.addEventListener('mouseenter', randomFloat);
    window.addEventListener('resize', function(){
      x = Math.max(0, Math.min(window.innerWidth-90, x));
      y = Math.max(0, Math.min(window.innerHeight-60, y));
      btn.style.left = x + 'px';
      btn.style.top = y + 'px';
    });
    // Fireflies inside the love letter
    function addLetterFireflies() {
      const box = document.getElementById('fireflyLetterBg');
      for(let i=0;i<18;i++){
        let firefly=document.createElement('div');
        firefly.style.position='absolute';
        firefly.style.left=Math.random()*100+'%';
        firefly.style.top=Math.random()*100+'%';
        firefly.style.width=firefly.style.height=(3+Math.random()*4)+'px';
        firefly.style.background='#fff200';
        firefly.style.borderRadius='50%';
        firefly.style.opacity=0.7;
        firefly.style.boxShadow='0 0 12px 3px #fff200, 0 0 24px 6px #fff20055';
        firefly.style.pointerEvents='none';
        firefly.style.animation=`floatLetterFirefly ${5+Math.random()*8}s infinite ease-in-out`;
        box.appendChild(firefly);
      }
    }
    const style2=document.createElement('style');
    style2.innerHTML+=`@keyframes floatLetterFirefly {0%{transform:translateY(0) scale(1);}50%{transform:translateY(-20px) scale(1.2);}100%{transform:translateY(0) scale(1);}}`;
    document.head.appendChild(style2);
    // Show letter on button click
    btn.onclick = function() {
      document.getElementById('letterBox').style.display = 'block';
      btn.style.display = 'none';
      clearInterval(floatInterval);
      addLetterFireflies();
      // Confetti effect
      for(let i=0;i<80;i++){
        let confetti=document.createElement('div');
        confetti.style.position='absolute';
        confetti.style.left=(document.getElementById('letterBox').offsetLeft + Math.random()*document.getElementById('letterBox').offsetWidth) + 'px';
        confetti.style.top=(document.getElementById('letterBox').offsetTop + 20 + Math.random()*40) + 'px';
        confetti.style.width=confetti.style.height=(6+Math.random()*6)+'px';
        confetti.style.background=['#ff69b4','#fff200','#00cfff','#ffb7c5','#fff','#d6336c'][Math.floor(Math.random()*6)];
        confetti.style.borderRadius=Math.random()>0.5?'50%':'2px';
        confetti.style.opacity=0.85;
        confetti.style.zIndex=10;
        confetti.style.pointerEvents='none';
        confetti.style.transition='all 2.2s cubic-bezier(.62,.04,.36,1.02)';
        document.body.appendChild(confetti);
        setTimeout(()=>{
          confetti.style.top=(document.getElementById('letterBox').offsetTop + 120 + Math.random()*180)+'px';
          confetti.style.opacity='0';
        },10);
        setTimeout(()=>{
          confetti.remove();
        },2400);
      }
      // Remove play music button if present
      const playBtn = document.querySelector('#letterBox button');
      if(playBtn && playBtn.textContent === 'Play Music') playBtn.remove();
    };
    // Hearts follow mouse and touch
    document.addEventListener('mousemove',function(e){
      let heart=document.createElement('div');
      heart.innerHTML='❤';
      heart.style.position='fixed';
      heart.style.left=e.clientX+'px';
      heart.style.top=e.clientY+'px';
      heart.style.fontSize='24px';
      heart.style.opacity='0.8';
      heart.style.pointerEvents='none';
      heart.style.color='#ff69b4'; // pink color
      heart.style.transition='all 1s ease-out';
      heart.style.zIndex='100';
      document.body.appendChild(heart);
      setTimeout(()=>{
        heart.style.top=(e.clientY-50)+'px';
        heart.style.opacity='0';
      },10);
      setTimeout(()=>{
        heart.remove();
      },1000);
    });
    document.addEventListener('touchmove',function(e){
      let touch = e.touches[0];
      let heart=document.createElement('div');
      heart.innerHTML='❤';
      heart.style.position='fixed';
      heart.style.left=touch.clientX+'px';
      heart.style.top=touch.clientY+'px';
      heart.style.fontSize='24px';
      heart.style.opacity='0.8';
      heart.style.pointerEvents='none';
      heart.style.color='#ff69b4'; // pink color
      heart.style.transition='all 1s ease-out';
      heart.style.zIndex='100';
      document.body.appendChild(heart);
      setTimeout(()=>{
        heart.style.top=(touch.clientY-50)+'px';
        heart.style.opacity='0';
      },10);
      setTimeout(()=>{
        heart.remove();
      },1000);
    });
  </script>
</body>
</html>
