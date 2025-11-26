# 🎵 Audio Player Management Guide

## 📖 Introduction
This guide explains how to modify tracks, titles, and duration in your website's audio player, even if you have no coding experience.

**All work is done inside the Elementor HTML Widget.**

---

## ⚠️ Golden Rule
When editing code, **be careful not to delete quotation marks `""` or symbols `< >`**. Only modify the text inside them.

---

## 1. Structure of a "Track"
The player consists of identical blocks. Each block represents one song. Here is what a single block looks like in the code:

```html
<div class="track-row">
    <audio src="PASTE_AUDIO_LINK_HERE"></audio>
    <div class="play-btn"><i class="fas fa-play"></i></div>
    <div class="track-name">WRITE_TITLE_HERE</div>
    <div class="track-time">00:00</div>
</div>
```

**There are only 3 things you need to edit:**

- **Audio Link**: The text following `src="..."`
- **Title**: The white text after `class="track-name">`
- **Duration**: The numbers after `class="track-time">`

---

## 2. Common Operations

### A. How to Change an Audio File
1. **Upload** the new mp3 file to WordPress (`Media > Add New`)
2. **Click** "Copy URL to clipboard" to get the file link
3. **Go back** to Elementor, into the HTML widget
4. **Find** the line starting with `<audio src="...`
5. **Delete** the old link inside the quotation marks `""` and paste the new one

**✅ Correct:** `src="https://site.com/song.mp3"`
**❌ Wrong:** `src=https://site.com/song.mp3` (Missing quotes!)

### B. How to Change Title and Duration
- **Find** the text in the code and rewrite it
- **Find** the current title (e.g., "När du just vaknat") and replace it
- **Find** the duration (e.g., "00:00") and type the correct time (e.g., "05:30")

### C. How to Add a New Song
1. **Copy** the "Base Block" code below
2. **Go** to the Elementor HTML widget
3. **Scroll** to the last song in the list (before the list closes with `</div>`)
4. **Press** Enter to make space and **Paste** the block
5. **Replace** Link, Title, and Duration as explained above

**Copy this code to add new tracks:**
```html
<div class="track-row">
    <audio src="PASTE_AUDIO_LINK_HERE"></audio>
    <div class="play-btn"><i class="fas fa-play"></i></div>
    <div class="track-name">New Track Title</div>
    <div class="track-time">00:00</div>
</div>
```

### D. How to Delete a Song
1. **Locate** the block of the song you want to remove
2. **Select** all text from `<div class="track-row">` to the corresponding closing `</div>`
3. **Press** Delete/Backspace on your keyboard

---

## 3. What NOT to Touch (Danger Zone 🚫)

Below the song list, you will find two sections named:

- **`<style>`** (Design and colors)
- **`<script>`** (The engine that makes play/pause work)

**Do not edit or delete anything in these sections**, otherwise the player will stop working or look broken.

---

## 🔧 Support
If you encounter problems:
1. Check that you haven't deleted quotation marks `""` or symbols `< >`
2. Verify that audio links are complete and working
3. Make sure you saved changes in Elementor

**Need help?** Contact support:

**Lorenzo Dastoli**  
**lorenzo.dastoli@gmail.com**

Feel free to ask me for assistance with any modifications! 😊
