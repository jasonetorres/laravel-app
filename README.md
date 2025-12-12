# Jason Torres - Headless Portfolio

A personal portfolio and content hub built with **Laravel**. This project serves as a central aggregation point for my work, treating external platforms like **Hashnode** and **YouTube** as headless content sources.

It features a custom "Terminal" aesthetic for code blocks, dynamic content fetching via GraphQL and REST APIs, and a tabbed interface powered by Alpine.js.

## 🚀 Features

-   **Headless Blog Engine**: Fetches articles dynamically from [Hashnode](https://hashnode.com) using their GraphQL API. No local database storage for posts is required.
-   **YouTube Integration**: Automatically retrieves the latest video uploads from a specific channel using the YouTube Data API.
-   **Dynamic Tab Interface**: A lightweight, single-page-like experience for switching between "Writing," "Speaking," and "Streaming" sections using **Alpine.js**.
-   **Custom Syntax Highlighting**: A vanilla JavaScript solution that transforms raw HTML `<pre>` tags into Mac-style "Terminal" windows with syntax highlighting.
-   **Minimalist Design**: Built with Tailwind CSS, featuring a dark mode aesthetic (`bg-[#050505]`) and custom scrollbars.

## 🛠 Tech Stack

-   **Framework**: [Laravel 12](https://laravel.com)
-   **Frontend**: [Blade Templates](https://laravel.com/docs/blade), [Tailwind CSS](https://tailwindcss.com)
-   **Interactivity**: [Alpine.js](https://alpinejs.dev)
-   **APIs**:
    -   Hashnode GraphQL API (for Blog Posts)
    -   YouTube Data API v3 (for Video Streams)
-   **Deployment**: Optimized for [Laravel Cloud](https://cloud.laravel.com)

## ⚙️ Installation & Setup

1.  **Clone the repository**
    ```bash
    git clone [https://github.com/jasonetorres/laravel-app.git](https://github.com/jasonetorres/laravel-app.git)
    cd laravel-app
    ```

2.  **Install PHP dependencies**
    ```bash
    composer install
    ```

3.  **Install Node dependencies & build assets**
    ```bash
    npm install
    npm run build
    ```

4.  **Environment Configuration**
    Copy the example environment file and generate an application key:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5.  **Configure API Keys**
    Add the following keys to your `.env` file to enable dynamic content fetching:

    ```env
    # Required for the "Streaming" tab
    YOUTUBE_API_KEY=your_google_cloud_api_key
    YOUTUBE_CHANNEL_ID=your_channel_id_starts_with_UC

    # Optional: Hashnode Host (defaults to film2code.vercel.app in code if not set)
    # HASHNODE_HOST=yourwebsite.com
    ```

6.  **Run the local server**
    ```bash
    php artisan serve
    ```

## 📂 Project Structure Highlights

-   **`routes/web.php`**: Handles the API logic.
    -   Fetches Hashnode posts via `Http::post`.
    -   Converts YouTube Channel IDs (`UC...`) to Playlist IDs (`UU...`) to fetch uploads efficiently.
-   **`resources/views/welcome.blade.php`**: The main landing page containing the profile and the Alpine.js tab switcher.
-   **`resources/views/post.blade.php`**: The single post view that renders the HTML content from Hashnode.
-   **`resources/views/tutorial.blade.php`**: A detailed breakdown of how this portfolio was built.

## 🎨 Credits

-   **Author**: Jason Torres
-   **Design Inspiration**: Minimalist developer portfolios and dark-mode terminal aesthetics.

---

&copy; Jason Torres. All rights reserved.
