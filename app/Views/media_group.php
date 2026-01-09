<section class="grid grid-cols-2 lg:grid-cols-4 2xl:grid-cols-8 bg-gradient-to-r from-cyan-500 via-blue-500 via-indigo-500 to-purple-600 p-4">
    <?php
        $mediaGroupStats = [
            [
                'title' => 'Visitors Now',
                'desc' => 'Visitors Currently on Media Group',
            ],
            [
                'title' => 'Visitors Today',
                'desc' => 'Visitors Today in Media Group',
            ],
            [
                'title' => 'Hits Today',
                'desc' => 'Hits Today in Media Group',
            ],
            [
                'title' => 'Visitors Total',
                'desc' => 'Visitors Total in Media Group',
            ],
            [
                'title' => 'Hits Total',
                'desc' => 'Hits Total in Media Group',
            ],
            [
                'title' => 'Visitors per Day',
                'desc' => 'Visitors per Day in Media Group (Estimated)',
            ],
            [
                'title' => 'Visitors per Month',
                'desc' => 'Visitors per Month in Media Group (Estimated)',
            ],
            [
                'title' => 'Visitors per Year',
                'desc' => 'Visitors per Year in Media Group (Estimated)',
            ],
        ];
        $borderless = [6, 7];
    ?>

    <?php foreach ($mediaGroupStats as $stat): ?>
        <div class="stat border-r border-b border-r-white/25 border-b-white/25 even:border-r-0 [&:nth-last-child(-n+2)]:border-b-0 lg:even:border-r lg:[&:nth-child(4n)]:border-r-0 lg:[&:nth-last-child(-n+4)]:border-b-0 2xl:border-b-0 2xl:even:border-r 2xl:[&:nth-child(4n)]:border-r 2xl:[&:nth-child(8n)]:border-r-0">
            <span class="stat-title text-white text-base"><?= esc($stat['title']) ?></span>
            <span class="stat-value text-shadow-sm" data-value-sum="<?= $stat['title'] ?>">0</span>
            <span class="stat-desc text-white"><?= esc($stat['desc']) ?></span>
        </div>
    <?php endforeach; ?>
</section>
