import { ref, readonly } from 'vue';

interface ModalData {
    title?: string;
    slug?: string;
    imgSrc?: string;
    href?: string;
    email?: string;
    pagePosition?: string;
    btnName?: string;
    formType?: string;
    page?: string;
}

const isOpen = ref(false);
const data = ref<ModalData>({});

export function useGeneralModal() {

    const open = (modalData: ModalData) => {
        data.value = modalData;
        isOpen.value = true;
    };

    const close = () => {
        isOpen.value = false;
        data.value = {};
    };

    return {
        isOpen: readonly(isOpen),
        data: readonly(data),

        open,
        close
    };
}
