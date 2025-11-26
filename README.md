# tavastkliniken-ljudfiler

🎵 Audio Player Management Guide
This guide explains how to modify tracks, titles, and duration in your website's audio player, even if you have no coding experience.

All work is done inside the Elementor HTML Widget.

⚠️ Golden Rule
When editing code, be careful not to delete quotation marks "" or brackets < >. Only modify the text inside them.

1. Structure of a "Track"
The player consists of identical blocks. Each block represents one song. Here is what a single block looks like in the code:

HTML

<div class="track-row">
    <audio src="PASTE_AUDIO_LINK_HERE"></audio>
    <div class="play-btn"><i class="fas fa-play"></i></div>
    <div class="track-name">WRITE TITLE HERE</div>
    <div class="track-time">00:00</div>
</div>
There are only 3 things you need to edit:

Audio Link: The text following src="...

Title: The white text after class="track-name">

Duration: The numbers after class="track-time">

2. Common Operations
A. How to change an audio file
Upload the new mp3 file to WordPress (Media > Add New).

Click "Copy URL to clipboard" to get the file link.

Go back to Elementor, into the HTML widget.

Find the line starting with <audio src="....

Delete the old link inside the quotation marks "" and paste the new one.

Correct: src="https://site.com/song.mp3"

Wrong: src=https://site.com/song.mp3 (Missing quotes!)

B. How to change Title and Duration
Simply find the text in the code and rewrite it.

Find the current title (e.g., "När du just vaknat") and replace it.

Find the duration (e.g., "00:00") and type the correct time (e.g., "05:30").

C. How to add a new song
Copy the "Base Block" code provided below.

Go to the Elementor HTML widget.

Scroll to the last song in the list (before the list closes with </div>).

Press Enter to make space and Paste the block.

Replace the Link, Title, and Duration as explained above.

Copy this code to add new tracks:

HTML

<div class="track-row">
    <audio src="PASTE_AUDIO_LINK_HERE"></audio>
    <div class="play-btn"><i class="fas fa-play"></i></div>
    <div class="track-name">New Track Title</div>
    <div class="track-time">00:00</div>
</div>
D. How to delete a song
Locate the block of the song you want to remove.

Select all text from <div class="track-row"> to the corresponding closing </div>.

Press Delete/Backspace on your keyboard.

3. What NOT to touch (Danger Zone 🚫)
Below the song list, you will see two sections named:

<style> (Design and colors)

<script> (The engine that makes play/pause work)

Do not edit or delete anything in these sections, otherwise, the player will stop working or look broken.
