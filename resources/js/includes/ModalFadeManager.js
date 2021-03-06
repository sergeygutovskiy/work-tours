import Modal from "./Modal";

export default class ModalFadeManager {
    modals = [];
    fade = [];
    
    constructor(fade) {
        this.fade = fade;
    }

    add_modal(modal) {
        for (let trigger_el of modal.trigger_els) {
            trigger_el.addEventListener("click", (e) => { this.fade.open(); });
        }
        
        modal.btn_el.addEventListener("click", (e) => { this.fade.close(); });

        for (let container_el of modal.container_els) {
            container_el.addEventListener("click", (e) => {
                if (e.target !== container_el) return;    
                this.fade.close();
            });
        }

        this.modals.push(modal);
    }

    update_modal_triggers(index, trigger_els) {
        this.modals[index].set_trigger_els(trigger_els);

        for (let trigger_el of this.modals[index].trigger_els) {
            trigger_el.addEventListener("click", (e) => { this.fade.open(); });
        }
    }
}