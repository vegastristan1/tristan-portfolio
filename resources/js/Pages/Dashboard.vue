<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PaginationLinks from '@/Components/PaginationLinks.vue';

defineProps({
    users: Object,
})

const getDate = (date) =>
    new Date(date).toLocaleDateString('en-us', {
        year: "numeric",
        month: "long",
        day: "numeric",
    })
</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">You're logged in!</div>
                </div>
            </div>
        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200">
                        <thead>
                            <tr class="bg-gray-200 text-left">
                                <th class="px-6 py-3 text-gray-700">Avatar</th>
                                <th class="px-6 py-3 text-gray-700">Name</th>
                                <th class="px-6 py-3 text-gray-700">Email</th>
                                <th class="px-6 py-3 text-gray-700">Registration Date</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="border-b" v-for="user in users.data" :key="user.id">
                                <td class="px-6 py-4">
                                    <img :src="user.avatar ? ('storage/' + user.avatar) : 'storage/avatars/majinbuu1.jpg'"
                                        alt="" class="w-10 h-10 rounded-full">
                                </td>
                                <td class="px-6 py-4">{{ user.name }}</td>
                                <td class="px-6 py-4">{{ user.email }}</td>
                                <td class="px-6 py-4">{{ getDate(user.created_at) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination Links -->
                <div class="mt-4">
                    <!-- Pagination elements go here -->
                    <PaginationLinks :paginator="users" />
                </div>
            </div>
        </div>

    </AuthenticatedLayout>
</template>
