<script setup>
import SocialMediaSection from './SocialMediaSection.vue';
import ContactSection from './ContactSection.vue';
import QuotesSection from './QuotesSection.vue';
import ProfileSection from './ProfileSection.vue';
</script>

<template>
    <div
        class="hidden sm:flex md:flex flex-col justify-between h-full px-3 py-4 overflow-y-auto rounded-lg mb-2 bg-slate-800">
        <div>
            <div class="space-y-2 font-medium">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-1">
                    <ProfileSection />
                    <div class="hidden sm:block md:block lg:hidden py-4">
                        <ContactSection class="mb-2 sm:border-t-0 md:border-t-0" />
                        <QuotesSection />
                    </div>
                </div>
            </div>
            <div>
                <QuotesSection class="hidden lg:block" />
            </div>
            <div>
                <ContactSection class="hidden lg:block pt-4 mt-4 md:border-t" />
            </div>
        </div>

        <div>
            <SocialMediaSection class="hidden lg:flex" />
        </div>
    </div>
</template>
