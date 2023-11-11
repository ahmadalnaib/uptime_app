<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import SiteSelector from '@/Components/SiteSelector.vue';


defineProps({
    site: {
        type: Object,
        required: true,
    },
    sites: {
        type: Object,
        required: true,
    },
});
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <div class="flex items-center justify-between p-4">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Dashboard
                </h2>
                <div>
                   <SiteSelector :sites="sites.data" />
                </div>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                   {{ site.domain }}
                </div>
            </div>
        </div>
    </AppLayout>
</template>
