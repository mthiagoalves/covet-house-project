import { ref, readonly } from 'vue';

const isOpen = ref(false);

export function useSearchModal() {

    const open = () => {
        isOpen.value = true;
    };

    const close = () => {
        isOpen.value = false;
    };

    return {
        isOpen: readonly(isOpen),
        open,
        close
    };
}
