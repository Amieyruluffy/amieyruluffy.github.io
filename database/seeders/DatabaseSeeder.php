<?php

namespace Database\Seeders;

use App\Models\AboutContent;
use App\Models\ContactInformation;
use App\Models\Experience;
use App\Models\HeroContent;
use App\Models\Project;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::truncate();
        HeroContent::truncate();
        AboutContent::truncate();
        Skill::truncate();
        Experience::truncate();
        Project::truncate();
        Service::truncate();
        Testimonial::truncate();
        ContactInformation::truncate();

        User::create([
            'name' => 'Mohamad Amirul Helmi',
            'email' => 'aamieyruljr@gmail.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        HeroContent::create([
            'title_line1' => 'Building',
            'title_line2' => 'useful',
            'title_line3' => 'digital systems.',
            'description' => 'Recent Bachelor of Computer Science (Hons.) in Netcentric Computing graduate with hands-on experience in software development, web application development, database management and system implementation.',
            'typing_texts' => ['Software Engineer', 'Laravel Developer', 'Web Developer', 'Python Developer'],
        ]);

        AboutContent::create([
            'bio' => "Recent Bachelor of Computer Science (Hons.) in Netcentric Computing graduate seeking opportunities in Software Development, Web Development, or IT-related roles. Experienced in software development, web application development, database management, and system implementation through academic projects and a 14-week internship at MADANI IT EXPERTS COMPANY.\n\nPassionate about building reliable and user-friendly software solutions while continuously improving technical and problem-solving skills.",
            'projects_count' => 8,
            'experience_years' => 2,
            'expertise_level' => 'Software Engineer',
            'development_type' => 'Web & Software Development',
        ]);

        $skills = [
            ['name' => 'Python', 'category' => 'Programming', 'sort_order' => 1], ['name' => 'Java', 'category' => 'Programming', 'sort_order' => 2],
            ['name' => 'C++', 'category' => 'Programming', 'sort_order' => 3], ['name' => 'PHP', 'category' => 'Programming', 'sort_order' => 4],
            ['name' => 'HTML', 'category' => 'Web Development', 'sort_order' => 1], ['name' => 'CSS', 'category' => 'Web Development', 'sort_order' => 2],
            ['name' => 'JavaScript', 'category' => 'Web Development', 'sort_order' => 3], ['name' => 'PHP', 'category' => 'Web Development', 'sort_order' => 4],
            ['name' => 'Laravel', 'category' => 'Web Development', 'sort_order' => 5],
            ['name' => 'MySQL', 'category' => 'Database Management', 'sort_order' => 1], ['name' => 'SQL', 'category' => 'Database Management', 'sort_order' => 2],
            ['name' => 'Database Design', 'category' => 'Database Management', 'sort_order' => 3],
            ['name' => 'Flutter', 'category' => 'Mobile Development', 'sort_order' => 1], ['name' => 'Dart', 'category' => 'Mobile Development', 'sort_order' => 2], ['name' => 'Android Studio', 'category' => 'Mobile Development', 'sort_order' => 3],
            ['name' => 'Windows', 'category' => 'Operating Systems', 'sort_order' => 1], ['name' => 'Linux', 'category' => 'Operating Systems', 'sort_order' => 2], ['name' => 'macOS', 'category' => 'Operating Systems', 'sort_order' => 3],
        ];
        foreach ($skills as $skill) {
            Skill::create($skill);
        }

        Experience::create([
            'title' => 'Software Engineer', 'company' => 'MADANI IT EXPERTS SDN. BHD.', 'start_date' => '2026-07-01', 'is_current' => true, 'type' => 'job', 'sort_order' => 1,
            'description' => 'Developing and maintaining web-based systems using Laravel, PHP, JavaScript, HTML, CSS and MySQL.',
            'responsibilities' => [
                'Developed and maintained web-based systems using Laravel, PHP, JavaScript, HTML, CSS, and MySQL.',
                'Designed, developed, and enhanced system modules based on client and organizational requirements.',
                'Managed software development work from requirement analysis to implementation, testing, debugging, and deployment.',
                'Performed system testing, troubleshooting, and database management to support performance and reliability.',
                'Currently leading and managing the development of an Exam Monitoring System (EMOS) with CCTV-based monitoring and AI-powered detection features.',
                'Developed the Payung system for managing insurance and takaful agents.',
            ],
        ]);

        Experience::create([
            'title' => 'Programmer Intern', 'company' => 'MADANI IT EXPERTS COMPANY', 'start_date' => '2026-03-30', 'end_date' => '2026-07-03', 'is_current' => false, 'type' => 'internship', 'sort_order' => 2,
            'description' => '14-week internship contributing to web and mobile application development.',
            'responsibilities' => [
                'Developed and maintained a Contractor Management System for Lembaga Air Perak to support contractor registration, project monitoring, and contract management processes.',
                'Designed and enhanced system modules using Laravel, PHP, JavaScript, HTML, CSS, and MySQL.',
                'Assisted in database design, testing, debugging, and troubleshooting.',
                'Assisted in developing a Flutter-based Tadika Alumni mobile application and enhanced functionality based on user requirements.',
            ],
        ]);

        Experience::create([
            'title' => 'Freelance Web Developer', 'company' => 'Independent', 'start_date' => '2024-01-01', 'is_current' => true, 'type' => 'freelance', 'sort_order' => 3,
            'description' => 'Developing Laravel-based web applications and supporting technical implementation for student and personal projects.',
            'responsibilities' => [
                'Developed web applications using Laravel, PHP, MySQL, HTML, CSS, and JavaScript.',
                'Designed and implemented authentication, CRUD modules, database management systems, and responsive user interfaces.',
                'Performed debugging, testing, and system optimization.',
                'Assisted students with deployment and technical documentation of their systems.',
            ],
        ]);

        Experience::create([
            'title' => 'Freelance Academic and Technical Support', 'company' => 'Independent', 'start_date' => '2024-01-01', 'is_current' => true, 'type' => 'freelance', 'sort_order' => 4,
            'description' => 'Providing academic and technical support for student assignments and final year projects.',
            'responsibilities' => [
                'Prepared academic reports and technical documentation for student assignments and final year projects.',
                'Assisted students in writing structured reports including introduction, methodology, system design, and testing sections.',
                'Ensured reports complied with academic formatting and submission guidelines.',
                'Provided guidance on system documentation and presentation of technical content.',
            ],
        ]);

        // Current part-time experience — presented as secondary to software engineering.
        Experience::create([
            'title' => 'Part-Time Crew Member', 'company' => 'Kenangan Coffee', 'start_date' => '2026-09-01', 'is_current' => true, 'type' => 'earlier', 'sort_order' => 9,
            'description' => 'Current part-time café experience alongside a full-time software engineering career.',
            'responsibilities' => [
                'Support daily café operations and customer service.',
                'Assist with beverage preparation and order handling.',
                'Maintain cleanliness and follow outlet operating standards.',
                'Work collaboratively with the team during busy service periods.',
            ],
        ]);

        // Earlier part-time experience — intentionally presented as secondary experience on the portfolio.
        Experience::create([
            'title' => 'Part-Time Crew Member', 'company' => 'Llao Llao — Aeon Kinta City, Ipoh', 'start_date' => '2025-06-01', 'end_date' => '2025-12-31', 'is_current' => false, 'type' => 'earlier', 'sort_order' => 10,
            'description' => 'Part-time service experience in a fast-paced food and beverage environment.',
            'responsibilities' => [
                'Assisted in food preparation and kitchen operations to support smooth daily service.',
                'Maintained cleanliness and followed food safety and hygiene regulations.',
                'Supported team members during peak hours to maintain customer service standards.',
            ],
        ]);

        Experience::create([
            'title' => 'Part-Time Kitchen Crew', 'company' => 'DOREMI Steamboat Restaurant — Meru, Ipoh', 'start_date' => '2024-02-01', 'end_date' => '2024-12-31', 'is_current' => false, 'type' => 'earlier', 'sort_order' => 11,
            'description' => 'Part-time kitchen and customer service experience in a busy restaurant environment.',
            'responsibilities' => [
                'Prepared frozen yogurt products according to standard operating procedures.',
                'Provided efficient and friendly customer service.',
                'Ensured outlet cleanliness and proper stock arrangement.',
            ],
        ]);

        Experience::create([
            'title' => 'Part-Time Barista', 'company' => 'McDonald\'s — Klebang, Ipoh', 'start_date' => '2022-06-01', 'end_date' => '2022-12-31', 'is_current' => false, 'type' => 'earlier', 'sort_order' => 12,
            'description' => 'Part-time barista and service experience in a high-volume food service environment.',
            'responsibilities' => [
                'Prepared beverages and food items according to company standards.',
                'Provided friendly and efficient customer service in a fast-paced environment.',
                'Maintained workstation and dining area cleanliness and hygiene.',
                'Assisted with cash transactions and order processing.',
            ],
        ]);

        Experience::create([
            'title' => 'Part-Time Catering Crew', 'company' => 'Event Catering Service', 'start_date' => '2018-01-01', 'end_date' => '2018-12-31', 'is_current' => false, 'type' => 'earlier', 'sort_order' => 13,
            'description' => 'Event catering experience requiring teamwork, communication and time management.',
            'responsibilities' => [
                'Worked as part of a catering team in high-pressure event environments.',
                'Followed hygiene and safety procedures while handling food and equipment.',
                'Assisted with event setup and breakdown within scheduled timelines.',
            ],
        ]);

        Experience::create([
            'title' => 'Part-Time Burger Stall Assistant', 'company' => 'Burger Vendor', 'start_date' => '2016-01-01', 'end_date' => '2016-12-31', 'is_current' => false, 'type' => 'earlier', 'sort_order' => 14,
            'description' => 'Early work experience in customer service, food preparation and cash handling.',
            'responsibilities' => [
                'Prepared and sold burgers to customers.',
                'Handled customer orders and payments.',
            ],
        ]);

        $projects = [
            ['title' => 'Exam Monitoring System (EMOS)', 'slug' => 'exam-monitoring-system', 'image' => 'images/emos.png', 'description' => 'An examination monitoring platform with CCTV-based monitoring and AI-powered detection, covering examinations, students, invigilators, halls, cameras, attendance and incidents.', 'technologies' => ['Laravel', 'PHP', 'JavaScript', 'CCTV', 'AI Detection'], 'sort_order' => 1],
            ['title' => 'AI Marketing Assistant', 'slug' => 'ai-marketing-assistant', 'image' => 'images/ai-marketing.png', 'description' => 'An AI-powered marketing workspace for managing product information, campaigns, AI-generated content and marketing workflows in one platform.', 'technologies' => ['Laravel', 'PHP', 'JavaScript', 'AI', 'MySQL'], 'sort_order' => 2],
            ['title' => 'Payung — Insurance & Takaful Agent Management System', 'slug' => 'payung-agent-management', 'image' => 'images/payung.png', 'description' => 'A web-based system for managing insurance and takaful agents, built to support agent administration and operational workflows.', 'technologies' => ['Laravel', 'PHP', 'JavaScript', 'MySQL'], 'live_url' => 'http://payung.test/', 'sort_order' => 3],
            ['title' => 'Contractor Management System — Lembaga Air Perak', 'slug' => 'contractor-management-lap', 'image' => 'images/lap.png', 'description' => 'Web-based contractor management system supporting contractor registration, project monitoring and contract management processes.', 'technologies' => ['Laravel', 'PHP', 'MySQL', 'JavaScript', 'HTML/CSS'], 'sort_order' => 4],
            ['title' => 'Tadika Alumni Application', 'slug' => 'tadika-alumni-application', 'image' => 'images/tadika.png', 'description' => 'Flutter-based mobile application for alumni information management, enhanced with new features and tested for application reliability.', 'technologies' => ['Flutter', 'Mobile App', 'Dart'], 'sort_order' => 5],
            ['title' => 'Smart Attendance System using Fingerprint Recognition', 'slug' => 'smart-attendance-fingerprint', 'image' => 'images/attendance.png', 'description' => 'Final Year Project: a web-based student attendance system using Arduino and biometric fingerprint authentication with MySQL attendance records.', 'technologies' => ['PHP', 'JavaScript', 'MySQL', 'Arduino IDE', 'Fingerprint Sensor'], 'sort_order' => 6],
            ['title' => 'Train Booking System — Flutter', 'slug' => 'train-booking-flutter', 'image' => 'images/train-booking.png', 'description' => 'A Flutter mobile application for train ticket booking and reservation with user registration, train search, seat booking and booking history.', 'technologies' => ['Flutter', 'Dart', 'Firebase', 'Mobile App'], 'sort_order' => 7],
            ['title' => 'WattWizard — Electricity Bill Estimator', 'slug' => 'wattwizard', 'image' => 'images/wattwizard.png', 'description' => 'Android application that estimates electricity bills from energy usage and rebate percentage, applying different rates across usage blocks.', 'technologies' => ['Android Studio', 'Java', 'XML'], 'sort_order' => 8],
        ];
        foreach ($projects as $project) {
            $project['is_featured'] = true;
            Project::create($project);
        }

        $this->call(CandyWallProjectSeeder::class);

        foreach ([
            ['title' => 'Web Application Development', 'icon' => 'code', 'description' => 'Building responsive web applications with Laravel, PHP, JavaScript, HTML and CSS.', 'sort_order' => 1],
            ['title' => 'Database Development', 'icon' => 'database', 'description' => 'Designing and managing relational databases with MySQL and SQL for reliable application data.', 'sort_order' => 2],
            ['title' => 'System Implementation', 'icon' => 'cpu', 'description' => 'Supporting requirements analysis, implementation, testing, debugging and deployment of software systems.', 'sort_order' => 3],
            ['title' => 'Technical Support', 'icon' => 'life-buoy', 'description' => 'Assisting with system documentation, deployment and technical implementation for academic and software projects.', 'sort_order' => 4],
        ] as $service) {
            Service::create($service);
        }

        ContactInformation::create([
            'email' => 'aamieyruljr@gmail.com', 'phone' => '+60 11-37267929', 'location' => 'Ipoh, Perak',
            'portfolio_url' => '', 'github_url' => '', 'linkedin_url' => '', 'twitter_url' => '',
        ]);
    }
}
