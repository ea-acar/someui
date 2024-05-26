<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="px-6 py-6">
<div class="flex flex-col gap-3">
    <div>
        <br>
        <p>Button</p>
        <br>
        <x-button>Log In</x-button>
    </div>
    <div>
        <br>
        <p>Card</p>
        <br>
        <x-card name="Card Title" description="This is a small description." buttonText="Learn More">
            <p>Here are the details of the card. This section can contain more information about the card content.</p>
        </x-card>
    </div>
    <div>
        <br>
        <p>Badge</p>
        <br>
        <x-badge type="info">Info</x-badge>
    </div>
    <div>
        <br>
        <p>Alert</p>
        <br>
        <x-alert type="success">This is a success alert.</x-alert>
    </div>
    <div>
        <br>
        <p>Sidebar</p>
        <br>
        @php
            $links = [
                ['name' => 'Home', 'url' => '#'],
                ['name' => 'Transactions', 'url' => '#'],
                ['name' => 'Payments', 'url' => '#'],
                ['name' => 'Accounts', 'url' => '#'],
            ];
        @endphp
        <x-sidebar :links="$links"/>
    </div>
    <div>
        <br>
        <p>Profile Card</p>
        <br>
        @php
            $user = [
                'name' => 'Jordan',
                'email' => 'jordan@example.com',
                'avatar' => 'https://picsum.photos/150',
            ];
        @endphp
        <x-profile-card :user="$user"/>
    </div>
    <div>
        <br>
        <p>Stat Cards</p>
        <br>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mt-8">
            <x-stat-card title="Balance" value="$1,636,500" description="Last updated 18 days ago"/>
            <x-stat-card title="Upcoming Bills" value="$2,560" description="Due within the next 30 days"/>
            <x-stat-card title="Your Wallet" value="$109,795" description="Available funds"/>
        </div>
    </div>
    <div>
        <br>
        <p>Modal</p>
        <br>
        <x-button onclick="document.getElementById('myModal').classList.remove('hidden')">Open Modal</x-button>
        <x-modal id="myModal" title="My Modal">
            <p>This is the modal content.</p>
        </x-modal>
    </div>
    <div>
        <br>
        <p>Progress Bar</p>
        <br>
        <x-progress-bar progress="75"/>
    </div>
    <div>
        <br>
        <p>Search Bar</p>
        <br>
        <x-search-bar class="mb-4"/>
    </div>
    <div>
        <br>
        <p>Stat Overview</p>
        <br>
        <div class="flex gap-3">
            <x-stat-overview title="Balance" value="$1,636,500" trend="5"/>
            <x-stat-overview title="Expenses" value="$4,500" trend="-3"/>
        </div>
    </div>
    <div>
        <br>
        <p>Action Button</p>
        <br>
        <x-action-button label="Send Money" icon="https://picsum.photos/20"/>
    </div>
    <div>
        <br>
        <p>File Input</p>
        <br>
        <x-file-input id="upload" name="file" />
    </div>
    <div>
        <br>
        <p>Toggle Switch</p>
        <br>
        <x-toggle-switch checked="true"/>
    </div>
    <div>
        <br>
        <p>Dropdown</p>
        <br>
        <x-dropdown label="Actions" :options="['Edit', 'Delete', 'View']" />
    </div>
    <div>
        <br>
        <p>Icon Card</p>
        <br>
        <x-icon-card
            icon="https://picsum.photos/50"
            title="Mailchimp"
            description="Hold -$350"
        />
    </div>
    <div>
        <br>
        <p>Loading Spinner</p>
        <br>
        <x-loading-spinner />
    </div>
    <div>
        <br>
        <p>Pagination</p>
        <br>
        <x-pagination :currentPage="1" :lastPage="10"/>
    </div>
    <div>
        <br>
        <p>Notification Bell</p>
        <br>
        <x-notification-bell notifications="5" />
    </div>
    <div>
        <br>
        <p>Stats Card</p>
        <br>
        <div class="flex gap-3">
            <x-stats-card title="Revenue" value="$24,000" percentage="15" />
            <x-stats-card title="Profit" value="$2,000" percentage="15" />
            <x-stats-card title="MRR" value="$4,000" percentage="15" />
        </div>
    </div>
    <div class="mt-3">
        <x-tooltip text="This is a tooltip">
            <span class="group cursor-pointer">Hover me</span>
        </x-tooltip>
    </div>
    <div>
        <br>
        <p>Profile Info</p>
        <br>
        @php
            $user = [
                'name' => 'Jordan Smith',
                'email' => 'jordan@example.com',
                'role' => 'Administrator',
                'avatar' => 'https://picsum.photos/150',
            ];
        @endphp
        <div>
            <x-profile-info :user="$user" />
        </div>
    </div>
    <div>
        <br>
        <p>Image Card</p>
        <br>
        <x-image-card
            title="Beautiful Scenery"
            description="A beautiful view of the mountains during sunset."
            image="https://picsum.photos/400/200"
            buttonText="Learn More"
        />
    </div>
    <div>
        <br>
        <p>Notification</p>
        <br>
        <x-notification type="success" message="Your changes have been saved successfully!"/>
    </div>
    <div>
        <br>
        <p>Card List</p>
        <br>
        @php
            $items = [
                ['title' => 'Mailchimp', 'description' => 'Hold -$350', 'icon' => 'https://picsum.photos/24'],
                ['title' => 'Atlassian', 'description' => 'Apr 03 -$1,469', 'icon' => 'https://picsum.photos/24'],
                ['title' => 'DigitalOcean', 'description' => 'Apr 01 -$150', 'icon' => 'https://picsum.photos/24'],
            ];
        @endphp
        <x-card-list :items="$items"/>
    </div>
    <div>
        <br>
        <p>Toast</p>
        <br>
        <x-toast type="success" message="Your changes have been saved successfully!"/>
    </div>
    <div>
        <br>
        <p>Accordion</p>
        <br>
        <x-accordion title="Accordion Title">
            <p>This is the content of the accordion.</p>
        </x-accordion>
    </div>
    <div>
        <br>
        <p>Table</p>
        <br>
        @php
            $headers = ['Name', 'Email', 'Status'];
            $rows = [
                ['John Doe', 'john@example.com', 'Active'],
                ['Jane Doe', 'jane@example.com', 'Inactive'],
            ];
        @endphp
        <x-table :headers="$headers" :rows="$rows" />
    </div>
    <div>
        <br>
        <p>Avatar</p>
        <br>
        <x-avatar src="https://picsum.photos/150" alt="User Avatar" size="12" />
    </div>
</div>
</body>
</html>
