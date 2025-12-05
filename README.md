# 🎵 Audio Player System for WordPress with Elementor

## Overview / Översikt

**English:**
A complete audio player system for WordPress that allows non-technical users to manage and display audio files professionally without writing any code.

**Svenska:**
Ett komplett ljudspelare-system för WordPress som låter icke-tekniska användare hantera och visa ljudfiler professionellt utan att skriva någon kod.

---

## 📋 Table of Contents / Innehållsförteckning

1. [Features / Funktioner](#features--funktioner)
2. [Requirements / Krav](#requirements--krav)
3. [Installation / Installation](#installation--installation)
4. [Usage / Användning](#usage--användning)
5. [Customization / Anpassning](#customization--anpassning)
6. [Technical Documentation / Teknisk Dokumentation](#technical-documentation--teknisk-dokumentation)
7. [Troubleshooting / Felsökning](#troubleshooting--felsökning)

---

## ✨ Features / Funktioner

### English
- ✅ **Visual Management**: Add, edit and organize audio files via WordPress admin
- ✅ **Category System**: Organize audio in categories with descriptions
- ✅ **Media Library Integration**: Upload audio files directly from WordPress Media Library
- ✅ **Complete Style Control**: Customize colors, fonts and sizes without code
- ✅ **Responsive Design**: Works perfectly on desktop, tablet and mobile
- ✅ **Compact Layout**: Minimalist design without unnecessary spacing
- ✅ **No Coding Required**: Owner manages everything via visual interfaces
- ✅ **Elementor Compatible**: Displayed via shortcode in Elementor
- ✅ **Preview**: Listen to audio directly in admin list
- ✅ **Sortable**: Drag and drop to reorder tracks

### Svenska
- ✅ **Visuell Hantering**: Lägg till, redigera och organisera ljudfiler via WordPress admin
- ✅ **Kategorisystem**: Organisera ljud i kategorier med beskrivningar
- ✅ **Media Library Integration**: Ladda upp ljudfiler direkt från WordPress Media Library
- ✅ **Komplett Stilkontroll**: Anpassa färger, typsnitt och storlekar utan kod
- ✅ **Responsiv Design**: Fungerar perfekt på desktop, tablet och mobil
- ✅ **Kompakt Layout**: Minimalistisk design utan onödigt utrymme
- ✅ **Inget Kodande Krävs**: Ägaren hanterar allt via visuella gränssnitt
- ✅ **Elementor Kompatibel**: Visas via shortcode i Elementor
- ✅ **Förhandsvisning**: Lyssna på ljud direkt i admin-listan
- ✅ **Ordningsbar**: Dra och släpp för att ändra ordning på spår

---

## 🛠 Requirements / Krav

### English
- WordPress 5.0+
- PHP 7.4+
- Plugin: **Code Snippets** (free)
- Elementor (optional but recommended)
- Modern browser with HTML5 audio support

### Svenska
- WordPress 5.0+
- PHP 7.4+
- Plugin: **Code Snippets** (gratis)
- Elementor (valfritt men rekommenderat)
- Modern webbläsare med HTML5 audio-stöd

---

## 📦 Installation / Installation

### English

#### Step 1: Install Code Snippets
1. Go to **Dashboard → Plugins → Add New**
2. Search for **"Code Snippets"**
3. Install and activate plugin by **Code Snippets Pro**

#### Step 2: Add the System
1. Go to **Snippets → Add New**
2. Title: **Audio Player System**
3. Copy all code from `audio-system.php`
4. Paste into code field
5. **Code type**: PHP Snippet
6. **Run**: Run snippet everywhere
7. Click **Save Changes and Activate**

#### Step 3: Flush Permalinks
1. Go to **Settings → Permalinks**
2. Click **Save Changes** (without changing anything)
3. This registers the new post type correctly

#### Step 4: Verify Installation
1. Check that **"Audio Tracks"** appears in left sidebar menu
2. You should see a 🎵 icon next to the text
3. Click to open and verify everything works

### Svenska

#### Steg 1: Installera Code Snippets
1. Gå till **Dashboard → Tillägg → Lägg till nytt tillägg**
2. Sök efter **"Code Snippets"**
3. Installera och aktivera plugin av **Code Snippets Pro**

#### Steg 2: Lägg till Systemet
1. Gå till **Snippets → Add New**
2. Titel: **Audio Player System**
3. Kopiera hela koden från `audio-system.php`
4. Klistra in i kodfältet
5. **Code type**: PHP Snippet
6. **Run**: Run snippet everywhere
7. Klicka **Save Changes and Activate**

#### Steg 3: Flush Permalinks
1. Gå till **Inställningar → Permalänkar**
2. Klicka **Spara ändringar** (utan att ändra något)
3. Detta registrerar den nya post-typen korrekt

#### Steg 4: Verifiera Installation
1. Kontrollera att **"Audio Tracks"** visas i vänster sidomeny
2. Du bör se en ikon 🎵 bredvid texten
3. Klicka för att öppna och verifiera att allt fungerar

---

## 👨‍💻 Usage / Användning

### For Developers / För Utvecklaren

#### 1. Create Categories / Skapa Kategorier

**English:**
1. Go to **Audio Tracks → Audio Kategorier**
2. Click **Lägg till ny kategori** (Add New Category)
3. **Name**: Category name (e.g., "HITTA ETT ANKARE (meditation)")
4. **Description**: Optional subtitle or explanation
5. Click **Lägg till ny kategori**

**Svenska:**
1. Gå till **Audio Tracks → Audio Kategorier**
2. Klicka **Lägg till ny kategori**
3. **Namn**: Kategorinamn (ex: "HITTA ETT ANKARE (meditation)")
4. **Beskrivning**: Valfri undertitel eller förklaring
5. Klicka **Lägg till ny kategori**

#### 2. Upload Audio Files / Ladda upp Ljudfiler

**English:**
1. Go to **Audio Tracks → Lägg till ny** (Add New)
2. **Title**: Enter track name (e.g., "När du just vaknat")
3. **Audio File box**:
   - Click **📁 Välj fil** (Select File) button
   - Media Library opens
   - Upload new MP3 or select existing
   - Click **Använd denna fil** (Use This File)
4. **Durata**: Enter duration manually (e.g., "5:30")
5. **Category** (right sidebar): Check appropriate category
6. Click **Publicera** (Publish)

**Svenska:**
1. Gå till **Audio Tracks → Lägg till ny**
2. **Titel**: Skriv spårnamnet (ex: "När du just vaknat")
3. **Audio File-box**:
   - Klicka på **📁 Välj fil**-knappen
   - Media Library öppnas
   - Ladda upp ny MP3 eller välj befintlig
   - Klicka **Använd denna fil**
4. **Durata**: Skriv längden manuellt (ex: "5:30")
5. **Kategori** (höger sidebar): Kryssa för rätt kategori
6. Klicka **Publicera**

#### 3. Display on Website / Visa på Webbplatsen

##### With Elementor / Med Elementor:

**English:**
1. Open page in Elementor
2. Drag **"Shortcode"** widget to desired location
3. In "Enter your shortcode" field write: `[audio_player]`
4. Click **Update**
5. View page to see result

**Svenska:**
1. Öppna sidan i Elementor
2. Dra widget **"Shortcode"** till önskad plats
3. I fältet "Enter your shortcode" skriv: `[audio_player]`
4. Klicka **Uppdatera**
5. Visa sidan för att se resultatet

##### Without Elementor / Utan Elementor:

**English:**
1. Create or edit a page
2. Add a **Shortcode** block
3. Write: `[audio_player]`
4. Publish

**Svenska:**
1. Skapa eller redigera en sida
2. Lägg till ett **Shortcode**-block
3. Skriv: `[audio_player]`
4. Publicera

---

### For Website Owner / För Webbplatsägaren

#### Adding New Audio / Lägga till Nya Ljud

**English:**
1. Log in to WordPress admin
2. Go to **Audio Tracks → Lägg till ny** (Add New)
3. Write audio file **title**
4. Click **📁 Välj fil** (Select File) to choose audio from Media Library
5. Write **durata** (optional, e.g., "6:45")
6. Select **category** from list on the right
7. Click **Publicera** (Publish)

**Svenska:**
1. Logga in på WordPress admin
2. Gå till **Audio Tracks → Lägg till ny**
3. Skriv **titel** på ljudfilen
4. Klicka **📁 Välj fil** för att välja ljudfil från Media Library
5. Skriv **durata** (valfritt, ex: "6:45")
6. Välj **kategori** från listan till höger
7. Klicka **Publicera**

#### Editing Existing Audio / Redigera Befintliga Ljud

**English:**
1. Go to **Audio Tracks → Alla Audio Tracks** (All Audio Tracks)
2. Hover over the audio file you want to change
3. Click **Redigera** (Edit)
4. Make changes
5. Click **Uppdatera** (Update)

**Svenska:**
1. Gå till **Audio Tracks → Alla Audio Tracks**
2. För muspekaren över ljudfilen du vill ändra
3. Klicka **Redigera**
4. Gör ändringar
5. Klicka **Uppdatera**

#### Deleting Audio / Ta bort Ljud

**English:**
1. Go to **Audio Tracks → Alla Audio Tracks**
2. Hover over the audio file
3. Click **Flytta till papperskorgen** (Move to Trash)

**Svenska:**
1. Gå till **Audio Tracks → Alla Audio Tracks**
2. För muspekaren över ljudfilen
3. Klicka **Flytta till papperskorgen**

---

## 🎨 Customization / Anpassning

### Style Settings Panel / Inställningar Panel

**Access / Åtkomst:** **Audio Tracks → 🎨 Inställningar**

#### Category Titles / Kategorititlar

**English:**
- **Kategori Färg** (Category Color): Color of category names (e.g., #999999 for gray)
- **Kategori Textstorlek** (Category Text Size): Size in pixels (10-30px)
- **Kategori Typsnitt** (Category Font): Choose from Arial, Helvetica, Roboto, etc.

**Svenska:**
- **Kategori Färg**: Färgen på kategorinamn (ex: #999999 för grå)
- **Kategori Textstorlek**: Storlek i pixlar (10-30px)
- **Kategori Typsnitt**: Välj från Arial, Helvetica, Roboto, etc.

#### Track Titles / Spårtitlar

**English:**
- **Titel Färg** (Title Color): Color of audio file titles (e.g., #333333 for dark gray)
- **Titel Textstorlek** (Title Text Size): Size in pixels (12-24px)
- **Titel Typsnitt** (Title Font): Choose font for titles

**Svenska:**
- **Titel Färg**: Färgen på ljudfilstitlar (ex: #333333 för mörkgrå)
- **Titel Textstorlek**: Storlek i pixlar (12-24px)
- **Titel Typsnitt**: Välj font för titlar

#### Duration / Durata

**English:**
- **Durata Färg** (Duration Color): Color of time information (e.g., 5:30)

**Svenska:**
- **Durata Färg**: Färgen på tidsinformation (ex: 5:30)

#### Backgrounds & Lines / Bakgrunder & Linjer

**English:**
- **Bakgrundsfärg** (Background Color): Background for entire player list
- **Linje Färg** (Line Color): Color of separators between tracks

**Svenska:**
- **Bakgrundsfärg**: Bakgrund för hela spelarlistan
- **Linje Färg**: Färg på avdelare mellan spår

#### Audio Player / Audio Player

**English:**
- **Player Kontroller Färg** (Player Controls Color): Color of play button and progress bar

**Svenska:**
- **Player Kontroller Färg**: Färg på play-knapp och framstegsstapel

**Save / Spara:** Click **💾 Spara** at the bottom

---

### Color Schemes / Färgscheman

#### Standard (Minimalist / Minimalistisk)
```
Category / Kategori: #999999
Title / Titel: #333333
Duration / Durata: #999999
Background / Bakgrund: #FFFFFF
Lines / Linjer: #E0E0E0
Player: #4CAF50
```

#### Dark Theme / Mörkt Tema
```
Category / Kategori: #BBBBBB
Title / Titel: #FFFFFF
Duration / Durata: #888888
Background / Bakgrund: #2C2C2C
Lines / Linjer: #444444
Player: #66BB6A
```

#### Blue Theme / Blått Tema
```
Category / Kategori: #2196F3
Title / Titel: #1565C0
Duration / Durata: #90CAF9
Background / Bakgrund: #E3F2FD
Lines / Linjer: #BBDEFB
Player: #2196F3
```

#### Warm Theme / Varmt Tema
```
Category / Kategori: #FF9800
Title / Titel: #E65100
Duration / Durata: #FFB74D
Background / Bakgrund: #FFF3E0
Lines / Linjer: #FFE0B2
Player: #FF9800
```

---

## 🔧 Technical Documentation / Teknisk Dokumentation

### Architecture / Arkitektur

**English:**
The system consists of 7 main components:

1. **Custom Post Type**: `audio_track` - Stores audio files
2. **Custom Taxonomy**: `audio_category` - Organizes audio in categories
3. **Meta Box**: Handles file upload and duration
4. **Settings Page**: Visual panel for style customization
5. **Shortcode**: `[audio_player]` - Displays player on frontend
6. **Admin Columns**: Preview in admin list
7. **Admin Notices**: Reminders about settings

**Svenska:**
Systemet består av 7 huvudkomponenter:

1. **Custom Post Type**: `audio_track` - Lagrar ljudfiler
2. **Custom Taxonomy**: `audio_category` - Organiserar ljud i kategorier
3. **Meta Box**: Hanterar fil-uppladdning och durata
4. **Inställningssida**: Visuell panel för stilanpassning
5. **Shortcode**: `[audio_player]` - Visar spelaren på frontend
6. **Admin Columns**: Förhandsvisning i admin-listan
7. **Admin Notices**: Påminnelser om inställningar

### Database Structure / Databasstruktur

#### Post Type: `audio_track`

**English:**
- Stored as standard WordPress posts
- Visible only in admin
- Supports: title, menu order

**Svenska:**
- Lagras som standard WordPress posts
- Synlig endast i admin
- Stöder: titel, menyordning

#### Taxonomy: `audio_category`

**English:**
- Hierarchical (like categories)
- Can have descriptions

**Svenska:**
- Hierarkisk (som kategorier)
- Kan ha beskrivningar

#### Post Meta:

**English:**
- `_audio_file_url`: Audio file URL (string)
- `_audio_durata`: Audio file duration (string, e.g., "5:30")

**Svenska:**
- `_audio_file_url`: URL till ljudfilen (string)
- `_audio_durata`: Längd på ljudfil (string, ex: "5:30")

#### Options:

**English:**
- `audio_category_color`: Hex color for categories
- `audio_category_size`: Size in pixels
- `audio_category_font`: Font family
- `audio_title_color`: Hex color for titles
- `audio_title_size`: Size in pixels
- `audio_title_font`: Font family
- `audio_duration_color`: Hex color for duration
- `audio_bg_color`: Background color
- `audio_divider_color`: Line color
- `audio_player_controls_color`: Player color

**Svenska:**
- `audio_category_color`: Hex-färg för kategorier
- `audio_category_size`: Storlek i pixlar
- `audio_category_font`: Font family
- `audio_title_color`: Hex-färg för titlar
- `audio_title_size`: Storlek i pixlar
- `audio_title_font`: Font family
- `audio_duration_color`: Hex-färg för durata
- `audio_bg_color`: Bakgrundsfärg
- `audio_divider_color`: Linjefärg
- `audio_player_controls_color`: Player-färg

### Shortcode API

**English & Svenska:**

```php
[audio_player]
```

**Parameters / Parametrar**: None (all settings retrieved from admin panel / Inga - alla inställningar hämtas från admin-panelen)

**Output**: HTML with inline CSS and embedded audio players

**Examples / Exempel**:
```html
<!-- In Elementor Shortcode Widget / I Elementor Shortcode Widget -->
[audio_player]

<!-- In WordPress Classic Editor / I WordPress Classic Editor -->
[audio_player]

<!-- In Block Editor / I Block Editor -->
<!-- Add Shortcode block and write / Lägg till Shortcode-block och skriv [audio_player] -->
```

### Hooks & Filters

#### Actions:
```php
// Register post type / Registrera post type
add_action('init', 'register_audio_track_post_type');

// Register taxonomy / Registrera taxonomy
add_action('init', 'register_audio_category_taxonomy');

// Load media scripts / Ladda media scripts
add_action('admin_enqueue_scripts', 'audio_enqueue_media_scripts');

// Add meta box / Lägg till meta box
add_action('add_meta_boxes', 'audio_file_meta_box');

// Save meta data / Spara meta data
add_action('save_post_audio_track', 'save_audio_file_meta');

// Add settings menu / Lägg till inställningsmeny
add_action('admin_menu', 'audio_player_settings_page');

// Admin column content / Admin kolumn innehåll
add_action('manage_audio_track_posts_custom_column', 'audio_admin_column_content', 10, 2);
```

#### Filters:
```php
// Admin columns / Admin kolumner
add_filter('manage_audio_track_posts_columns', 'audio_admin_columns');
```

#### Shortcode:
```php
// Register shortcode / Registrera shortcode
add_shortcode('audio_player', 'display_audio_player_shortcode');
```

---

## 🐛 Troubleshooting / Felsökning

### English

#### Problem: "Audio Tracks" doesn't appear in menu

**Solution:**
1. Check that snippet is active in **Snippets → All Snippets**
2. Go to **Settings → Permalinks** and click **Save Changes**
3. Press Ctrl+F5 to reload admin page
4. If still not visible, test URL directly: `yoursite.com/wp-admin/edit.php?post_type=audio_track`

#### Problem: "Välj fil" (Select File) button doesn't work

**Solution:**
1. Check that you're on "Lägg till ny Audio Track" or "Redigera Audio Track" page
2. Open browser Console (F12 → Console)
3. Click button and check for JavaScript errors
4. Common cause: Conflict with another plugin - try temporarily disabling other plugins

**Workaround:**
1. Go to **Media → Add New**
2. Upload MP3
3. Click file after upload
4. Copy URL from right panel
5. Go back to Audio Track
6. Paste URL directly into field

#### Problem: Shortcode shows nothing

**Solution:**
1. Check that you have at least 1 published Audio Track
2. Check that Audio Track has a category assigned
3. Check that audio file URL is correct
4. Test shortcode on regular page (not Elementor)
5. Clear cache if using cache plugin

#### Problem: Large empty space or "+" symbol

**Solution:**
1. This is Elementor's placeholder when widget is empty
2. Click on widget
3. Check that `[audio_player]` is in shortcode field
4. Make sure you're using **Shortcode** widget, not Text Editor

#### Problem: Style changes don't appear

**Solution:**
1. After saving settings, clear cache
2. Press Ctrl+F5 on frontend page
3. Test in Incognito/Private mode
4. Check that settings were actually saved (go back to settings page)

### Svenska

#### Problem: "Audio Tracks" visas inte i menyn

**Lösning:**
1. Kontrollera att snippet är aktivt i **Snippets → All Snippets**
2. Gå till **Inställningar → Permalänkar** och klicka **Spara ändringar**
3. Tryck Ctrl+F5 för att ladda om admin-sidan
4. Om fortfarande inte synlig, testa URL direkt: `yoursite.com/wp-admin/edit.php?post_type=audio_track`

#### Problem: Knappen "Välj fil" fungerar inte

**Lösning:**
1. Kontrollera att du är på sidan "Lägg till ny Audio Track" eller "Redigera Audio Track"
2. Öppna webbläsarens Console (F12 → Console)
3. Klicka på knappen och kolla efter JavaScript-fel
4. Vanlig orsak: Konflikt med annat plugin - prova inaktivera andra plugins temporärt

**Workaround:**
1. Gå till **Media → Lägg till ny**
2. Ladda upp MP3
3. Klicka på filen efter uppladdning
4. Kopiera URL från höger panel
5. Gå tillbaka till Audio Track
6. Klistra in URL direkt i fältet

#### Problem: Shortcode visar ingenting

**Lösning:**
1. Kontrollera att du har minst 1 publicerad Audio Track
2. Kontrollera att Audio Track har en kategori tilldelad
3. Kontrollera att ljudfil-URL är korrekt
4. Testa shortcode på en vanlig sida (inte Elementor)
5. Töm cache om du använder cache-plugin

#### Problem: Stort tomt utrymme eller "+" symbol

**Lösning:**
1. Detta är Elementor's placeholder när widget är tom
2. Klicka på widgeten
3. Kontrollera att `[audio_player]` finns i shortcode-fältet
4. Se till att du använder **Shortcode**-widget, inte Text Editor

#### Problem: Stiländringar visas inte

**Lösning:**
1. Efter att ha sparat inställningar, rensa cache
2. Tryck Ctrl+F5 på frontend-sidan
3. Testa i Incognito/Private-läge
4. Kontrollera att inställningar faktiskt sparades (gå tillbaka till inställningssidan)

---

## 📁 File Structure / Filstruktur

```
audio-system/
│
├── audio-system.php          # Main snippet / Huvudsnippet
└── README.md                             # This file / Denna fil
```

---

## 🔐 Security / Säkerhet

**English:**
The system implements the following security measures:

- ✅ **Nonce Verification**: All forms use WordPress nonces
- ✅ **Capability Checks**: Verifies user permissions before actions
- ✅ **Data Sanitization**: All input sanitized (esc_attr, esc_url, sanitize_hex_color, etc.)
- ✅ **Output Escaping**: All output escaped (esc_html, esc_url, esc_attr)
- ✅ **SQL Injection Prevention**: Uses WordPress WP_Query API
- ✅ **XSS Protection**: No direct output of user data without escaping

**Svenska:**
Systemet implementerar följande säkerhetsåtgärder:

- ✅ **Nonce Verification**: Alla formulär använder WordPress nonces
- ✅ **Capability Checks**: Kontrollerar användarrättigheter innan åtgärder
- ✅ **Data Sanitization**: All indata saneras (esc_attr, esc_url, sanitize_hex_color, etc.)
- ✅ **Output Escaping**: All utdata escapas (esc_html, esc_url, esc_attr)
- ✅ **SQL Injection Prevention**: Använder WordPress WP_Query API
- ✅ **XSS Protection**: Ingen direkt output av användardata utan escaping

---

## 🚀 Performance / Prestanda

**English:**
- **Minimal Database Load**: Uses WordPress standard tables
- **No AJAX**: Fast loading without extra requests
- **Inline CSS**: Only ~1KB extra CSS per page
- **Lazy Loading**: Audio loads only when user clicks play
- **Optimized Query**: Uses WP_Query efficiently
- **No jQuery Dependency**: Vanilla JavaScript for media uploader

**Svenska:**
- **Minimal Databaslast**: Använder WordPress standard tabeller
- **Inget AJAX**: Snabb laddning utan extra requests
- **Inline CSS**: Bara ~1KB extra CSS per sida
- **Lazy Loading**: Audio laddar endast när användaren klickar play
- **Optimerad Query**: Använder WP_Query effektivt
- **Ingen jQuery Dependency**: Vanilla JavaScript för media uploader

---

## 📱 Responsive Design

**English:**
The system is fully responsive with breakpoints:

- **Desktop** (> 768px): Full layout with all elements
- **Tablet/Mobile** (≤ 768px):
  - Reduced padding
  - Smaller category font size
  - Stack layout for title and duration when needed
  - Player takes full width

**Svenska:**
Systemet är fullt responsivt med breakpoints:

- **Desktop** (> 768px): Full layout med alla element
- **Tablet/Mobile** (≤ 768px):
  - Mindre padding
  - Reducerad fontstorlek på kategorier
  - Stack-layout för titel och durata vid behov
  - Player tar full bredd

---

## 🌐 Browser Support / Browser-stöd

**Supported / Stöds:**
- ✅ Chrome 90+
- ✅ Firefox 88+
- ✅ Safari 14+
- ✅ Edge 90+
- ✅ Opera 76+

**Audio Format Support:**
- ✅ MP3 (recommended / rekommenderat)
- ✅ WAV
- ✅ OGG
- ⚠️ M4A (limited support / begränsat stöd)

---

## 🔄 Updates / Uppdateringar

**English:**
The system is in one file (snippet) so updates are simple:

1. Backup current snippet code
2. Deactivate snippet
3. Paste new code
4. Activate snippet
5. Test functionality

**All settings and data are preserved** as they're stored in WordPress database.

**Svenska:**
Systemet ligger i en fil (snippet) så uppdateringar är enkla:

1. Backup current snippet code
2. Inaktivera snippet
3. Klistra in ny kod
4. Aktivera snippet
5. Testa funktionalitet

**Alla inställningar och data bevaras** eftersom de lagras i WordPress databas.

---

## 🆘 Support

**English:**
For support and questions:
1. First check [Troubleshooting](#troubleshooting--felsökning)
2. Verify all [Requirements](#requirements--krav) are met
3. Check WordPress debug log for PHP errors
4. Take screenshots of problems and error messages

**Svenska:**
För support och frågor:
1. Kontrollera först [Felsökning](#troubleshooting--felsökning)
2. Verifiera att alla [Krav](#requirements--krav) är uppfyllda
3. Kontrollera WordPress debug log för PHP-fel
4. Ta screenshots av problem och felmeddelanden

---

## 📜 License / Licens

**English:**
The system is open source and can be used freely in commercial and personal projects.

**Svenska:**
Systemet är open source och kan användas fritt i kommersiella och personliga projekt.

---

## 🙏 Credits

**Developed by / Utvecklat av**: Lorenzo Dastoli (Frontend Developer)  
**Date / Datum**: December 2025
**Version**: 1.0.0
---

## 🎯 Quick Reference Feature Overview / Funktionsöversikt för Snabbreferens

| Feature / Funktion | Description / Beskrivning | User / Användare |
|-------------------|---------------------------|------------------|
| **Audio Tracks** | Manage audio files / Hantera ljudfiler | Owner / Ägare |
| **Audio Kategorier** | Organize audio / Organisera ljud | Owner / Ägare |
| **🎨 Inställningar** | Customize colors & fonts / Anpassa färger och font | Owner / Ägare |
| **Media Library** | Upload MP3 / Ladda upp MP3 | Owner / Ägare |
| **Shortcode** | `[audio_player]` | Developer / Utvecklare |
| **Elementor Widget** | Display player / Visa spelare | Developer / Utvecklare |
| **Preview / Förhandsvisning** | Listen in admin / Lyssna i admin | Owner / Ägare |
| **Drag & Drop** | Reorder / Ändra ordning | Owner / Ägare |

---

**🎉 Thank you for using Audio Player System! / Tack för att du använder Audio Player System!**
Feel free to ask me for assistance with any modifications! 😊
