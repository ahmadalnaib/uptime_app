<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import SiteSelector from '@/Components/SiteSelector.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import InputLabel from '@/Components/InputLabel.vue';


defineProps({
site:Object,
sites:Object,
endpointFrequencies:Object,
});
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <div class="flex items-center justify-between p-4">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ site.data.domain  }}
                </h2>
                <div>
                   <SiteSelector :sites="sites.data" />
                </div>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
             <h2 class="font-semibold text-lg text-gray-800 leading-tight">New endpoint </h2>
             <form  class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex items-start p-3 mt-4 space-x-2">
                <div class="grow">
                 <InputLabel for="location" value="Location"  class="sr-only"/>
                 <TextInput id="location" type="text" placeholder="e.g /pricing"  class="block w-full h-9 text-sm" />
                </div>
                <div>
                    <InputLabel for="frequency" value="frequency"  class="sr-only"/> 
                    <select id="frequency" name="frequency" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm h-9 leading-none text-sm"  >

                        <option :value="frequency.frequency" v-for="frequency in  endpointFrequencies.data" :key="frequency.frequency">{{  frequency.label }}</option>
               
                        
                    </select>
                </div>
                <primary-button>Add</primary-button>
             </form>
            </div>
        </div>
    </AppLayout>
</template>
