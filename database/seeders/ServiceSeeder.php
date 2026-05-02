<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title' => 'Renewable Energy Development',
                'image' => 'img/services/renewable-energy.jpg',
                'summary' => 'Clean energy solutions across solar, wind, and hybrid systems.',
                'description' => 'Argyll and Bute Green Energy Ltd delivers renewable energy development solutions across solar, wind, and hybrid systems. We support projects from feasibility assessment and planning to implementation, monitoring, and long-term performance optimization.',
                'sort_order' => 1,
            ],
            [
                'title' => 'Energy Infrastructure & Engineering',
                'image' => 'img/services/energy-infrastructure.jpg',
                'summary' => 'Reliable infrastructure for modern energy generation and distribution.',
                'description' => 'We support the planning and development of energy infrastructure, including power systems, grid integration, and scalable distribution solutions for commercial, industrial, and community energy needs.',
                'sort_order' => 2,
            ],
            [
                'title' => 'Energy Transition Solutions',
                'image' => 'img/services/energy-transition.jpg',
                'summary' => 'Helping organisations move toward cleaner and more efficient energy systems.',
                'description' => 'Our energy transition solutions help businesses and institutions shift from conventional energy sources to sustainable alternatives while maintaining cost efficiency, operational reliability, and environmental responsibility.',
                'sort_order' => 3,
            ],
            [
                'title' => 'Energy Consulting & Advisory',
                'image' => 'img/services/energy-advisory.jpg',
                'summary' => 'Strategic advisory for energy efficiency, feasibility, and investment planning.',
                'description' => 'We provide professional advisory services covering energy efficiency, project feasibility, regulatory compliance, sustainability planning, and investment strategy for energy-related projects.',
                'sort_order' => 4,
            ],
            [
                'title' => 'Project Development & Management',
                'image' => 'img/services/project-management.jpg',
                'summary' => 'End-to-end planning and delivery of energy projects.',
                'description' => 'We manage energy projects from concept to completion, including planning, procurement coordination, stakeholder engagement, execution monitoring, and performance review.',
                'sort_order' => 5,
            ],
            [
                'title' => 'Sustainability & Environmental Solutions',
                'image' => 'img/services/sustainability.jpg',
                'summary' => 'Sustainable strategies for responsible energy development.',
                'description' => 'We support carbon reduction, environmental responsibility, and sustainability planning through practical solutions aligned with clean energy goals and long-term environmental performance.',
                'sort_order' => 6,
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(
                ['slug' => Str::slug($service['title'])],
                [
                    'title' => $service['title'],
                    'slug' => Str::slug($service['title']),
                    'image' => $service['image'],
                    'summary' => $service['summary'],
                    'description' => $service['description'],
                    'is_active' => true,
                    'sort_order' => $service['sort_order'],
                ]
            );
        }
    }
}