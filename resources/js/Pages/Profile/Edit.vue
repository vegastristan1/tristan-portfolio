<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import DeleteUserForm from './Partials/DeleteUserForm.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});
</script>

<template>

    <Head title="Profile" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Profile</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="inline-flex">
                    <div class="">
                        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                            <UpdateProfileInformationForm :must-verify-email="mustVerifyEmail" :status="status"
                                class="max-w-xl" />
                        </div>
                    </div>
                    <div class="">
                        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                            <div>
                                <header>
                                    <h2 class="text-lg font-medium text-gray-900">Profile Information</h2>

                                    <p class="mt-1 text-sm text-gray-600">
                                        Update your account's profile information and email address.
                                    </p>
                                </header>

                                <div class="mb-2">
                                    <label for="avatar">Avatar</label>
                                </div>

                                <img :src="$page.props.auth.user.avatar ? ('storage/' + $page.props.auth.user.avatar) : ('storage/avatars/majinbuu1.jpg')"
                                    alt="" class="inline-block h-40 w-40 rounded-full ring-2 ring-red">

                                <div class="mt-2">
                                    <input type="file" id="avatar" />

                                </div>

                                <div class="flex items-center gap-4">
                                    <PrimaryButton>Save</PrimaryButton>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <UpdatePasswordForm class="max-w-xl" />
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <DeleteUserForm class="max-w-xl" />
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
