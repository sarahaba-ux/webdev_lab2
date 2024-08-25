<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mingkai's Life (Content)</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/content.css">
</head>

<body>
<header>
    <div class="logo">
        <img src="/css/assets/logo.png" alt="Logo">
    </div>
    <nav>
        <ul>
            <li><a href="{{ route('homepage') }}" class="button">Home</a></li>
            <li><a href="{{ route('about') }}" class="button">About</a></li>
            <li><a href="{{ route('content') }}" class="button">Content</a></li>
        </ul>
    </nav>
</header>

<div class="simulation-container">
    <img src="/css/assets/mkhome.png" alt="Corner Image" class="corner-image">
    <h1 style="color: #ba005d;">Mingkai's Day Simulation</h1>
    <div id="scenario">
        <p style="color: #ba005d;">Welcome to Mingkai's day! What should she do first?</p>
    </div>
    <div id="choices">
        <button onclick="makeChoice(0, 0)">Stretch</button>
        <button onclick="makeChoice(1, 0)">Eat Breakfast</button>
        <button onclick="makeChoice(2, 0)">Play with a Toy</button>
    </div>
</div>

<div class="journal-container">
    <h1 style="color: #e65f8c;"> ˚ʚ♡ɞ˚ </h1>
    
    <div id="journal-cover" style="color: #b6446a;">
        <h2 style="color: #b6446a;">Mingkai's Journal</h2>
        <p>Welcome to Mingkai's personal journal. <br>Click the button to open the journal.</p>
        <button onclick="openJournal()">Open Journal</button>
    </div>
    
    <div id="journal" style="display: none;">
        <button id="close" class="icon-button close-button" onclick="closeJournal()">&#x2715;</button>
        
        <div class="left-page">
            <div id="entry-left"></div>
        </div>
        
        <div class="right-page">
            <div id="entry-right"></div>
        </div>
        
        <button id="prev" class="icon-button prev-button" onclick="prevEntry()">&#x276E;</button>
        <button id="next" class="icon-button next-button" onclick="nextEntry()">&#x276F;</button>
    </div>
</div>

<script style = "color: #10094">
    const scenarios = [
        [
            "Mingkai stretches and feels energized for the day. What should she do next?",
            "Mingkai eats a delicious breakfast. Now, what should she do?",
            "Mingkai plays with her favorite toy. She's feeling playful! What's next?"
        ],
        [
            "Mingkai takes a nap and feels refreshed. What should she do next?",
            "Mingkai explores the house and finds a cozy spot by the window. What should she do next?",
            "Mingkai interacts with Sarah and enjoys some quality time. What should she do next?"
        ],
        [
            "Mingkai watches the sunset and feels peaceful. What should she do next?",
            "Mingkai listens to a story and feels relaxed. What should she do next?",
            "Mingkai cuddles with Potpot and feels loved. What should she do next?"
        ],
        [
            "Mingkai explores the garden and finds beautiful flowers. What should she do next?",
            "Mingkai chases butterflies and has a lot of fun. What should she do next?",
            "Mingkai takes a nap under a tree and dreams of more adventures. What should she do next?"
        ]
    ];

    const choices = [
        ["Take a nap", "Explore the house", "Interact with Sarah"],
        ["Watch the sunset", "Listen to a story", "Cuddle with Potpot"],
        ["Take a nap", "Explore the garden", "Chase butterflies"]
    ];

    let step = 0;
    let choiceIndex = 0;

    function makeChoice(choice, index) {
        step = index;
        choiceIndex = choice;
        if (step < scenarios.length) {
            document.getElementById('scenario').innerHTML = `<p>${scenarios[step][choice]}</p>`;
            if (step < choices.length) {
                let buttons = '';
                choices[step].forEach((choiceText, i) => {
                    buttons += `<button onclick="makeChoice(${i}, ${step + 1})">${choiceText}</button>`;
                });
                document.getElementById('choices').innerHTML = buttons;
            } else {
                document.getElementById('choices').innerHTML = '<button onclick="restart()">Restart</button>';
            }
        }
        applyFont();
    }

    function restart() {
        step = 0;
        choiceIndex = 0;
        document.getElementById('scenario').innerHTML = '<p>Welcome to Mingkai\'s day! What should she do first?</p>';
        document.getElementById('choices').innerHTML = `
            <button onclick="makeChoice(0, 0)">Stretch</button>
            <button onclick="makeChoice(1, 0)">Eat Breakfast</button>
            <button onclick="makeChoice(2, 0)">Play with a Toy</button>
        `;
        applyFont();
    }

    const entries = [
        { title: "Day 1", content: "Today I chased a butterfly around the garden. It was fun!" },
        { title: "Day 2", content: "Had a lazy day napping on the couch." },
        { title: "Day 3", content: "Got a new toy mouse today! Played with it all afternoon." },
        { title: "Day 4", content: "Went to the vet—didn't like the shots, but got treats afterward." },
    ];

    let currentLeftEntry = 0;
    let currentRightEntry = 1;

    function updateEntry() {
        document.getElementById('entry-left').innerHTML = `
            <h2>${entries[currentLeftEntry].title}</h2>
            <p>${entries[currentLeftEntry].content}</p>
        `;
        document.getElementById('entry-right').innerHTML = `
            <h2>${entries[currentRightEntry].title}</h2>
            <p>${entries[currentRightEntry].content}</p>
        `;
        applyFont();
    }

    function nextEntry() {
        if (currentRightEntry < entries.length - 1) {
            currentLeftEntry += 2;
            currentRightEntry += 2;
            updateEntry();
        }
    }

    function prevEntry() {
        if (currentLeftEntry > 0) {
            currentLeftEntry -= 2;
            currentRightEntry -= 2;
            updateEntry();
        }
    }

    function openJournal() {
        document.getElementById('journal-cover').style.display = 'none';
        document.getElementById('journal').style.display = 'flex';
        updateEntry();  // Ensure the first entry is displayed when the journal is opened
    }

    let originalCover;

    function closeJournal() {
        document.getElementById('journal').style.display = 'none';

        // Check if the original cover is already present
        let existingCover = document.getElementById('journal-cover');
        if (existingCover) {
            existingCover.style.display = 'block';
        } else {
            // Recreate the original cover element
            const newCover = originalCover.cloneNode(true);
            document.querySelector('.journal-container').insertBefore(newCover, document.getElementById('journal'));
        }

        // Reassign event listeners to the new cover
        document.getElementById('journal-cover').querySelector('button').onclick = openJournal;

        // Reset entries to the first two pages
        currentLeftEntry = 0;
        currentRightEntry = 1;
    }

    function applyFont() {
        document.querySelectorAll('#scenario, #choices button, #entry-left, #entry-right').forEach(function(element) {
            element.style.fontFamily = "'Baloo 2', sans-serif";
        });
    }

    window.onload = function() {
        originalCover = document.getElementById('journal-cover').cloneNode(true);
        applyFont();
    };
</script>

<footer>
    <p>&copy; Mingkai's Life Website.</p>
</footer>

</body> 
</html>
