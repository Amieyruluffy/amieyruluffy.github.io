# Amirul Portfolio Customization

The public portfolio has been redesigned around Mohamad Amirul Helmi's resume.

## Content direction
- Software Engineer / Web Developer positioning
- F&B and unrelated part-time roles removed from public portfolio content
- Projects centered on EMOS, Lembaga Air Perak Contractor Management, Tadika Alumni, Smart Attendance, and WattWizard
- Resume-grounded skills and work history

## Visual direction
- Deep navy/black base
- Electric violet primary accent
- Warm amber secondary accent
- Bento cards, editorial typography, grid background, timeline and project showcase

## Add your own photo
The hero intentionally shows an initials placeholder when no profile image is uploaded. Upload the real photo through the existing admin hero/profile image field.

## Seed data
`database/seeders/DatabaseSeeder.php` contains the resume-grounded demo data. If using a fresh local database:

```bash
php artisan migrate:fresh --seed
```

Then run:

```bash
npm install
npm run dev
php artisan serve
```
