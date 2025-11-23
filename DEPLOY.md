# Deployment Instructions for Laravel Cloud

## Prerequisites
- A [Laravel Cloud](https://cloud.laravel.com) account.
- A GitHub or GitLab account connected to Laravel Cloud.

## Steps

1.  **Create a Repository**
    - Create a new repository on GitHub or GitLab.
    - Run the following commands in your terminal (inside the `laravel-app` folder):
      ```bash
      git remote add origin <your-repo-url>
      git branch -M main
      git push -u origin main
      ```

2.  **Connect to Laravel Cloud**
    - Log in to your Laravel Cloud dashboard.
    - Click **New Project**.
    - Select your repository (`laravel-app`).
    - Follow the prompts to configure your project. Laravel Cloud usually auto-detects the settings.

3.  **Environment Variables**
    - In the Laravel Cloud dashboard, go to **Settings** > **Environment Variables**.
    - Add your `APP_KEY` (you can find it in your local `.env` file).
    - Set `APP_DEBUG` to `false` for production.

4.  **Deploy**
    - Click **Deploy** to start the deployment process.
    - Once finished, you will receive a URL to view your live site.
