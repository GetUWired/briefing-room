<template id="add-new">

    <h2>Add New</h2>

    <form method="dialog" style="position: absolute; top: 15px; right: 15px;">
        <button style="cursor: pointer; border: 0; background: 0 0;">Close</button>
    </form>

    <form action="/wp-admin/admin-post.php" method="post">

        <input type="hidden" name="action" value="add_officer">
        <input type="hidden" name="redirect" value="<?php echo esc_attr(admin_url('admin.php?page=briefing-room-officers.php')); ?>">

        <table class="form-table" role="presentation">
            <tbody>
            </tbody>
        </table>

        <div class="submit" style="display: flex; justify-content: space-between;">
            <button type="submit" class="button button-primary">Save</button>
        </div>

    </form>

</template>

<script>
    class AddNewDialog extends HTMLDialogElement {

        connectedCallback() {

            const template = document.getElementById('add-new');
            this.innerHTML = template.innerHTML + this.innerHTML

            const fields = JSON.parse(this.getAttribute('data-fields'))
            fields.forEach(this.appendFieldCallback())

            const target = document.getElementById(this.getAttribute('target'))
            target.addEventListener('click', this.showModal.bind(this))
        }

        appendFieldCallback() {
            return ({id, label: labelText, required}) => {
                const node = document.createElement('tr')

                const header = document.createElement('th')
                header.addAttribute('scope', 'row')
                node.appendChild(header)

                const label = document.createElement('label')
                label.addAttribute('for', id)
                label.textContent = labelText
                header.appendChild(label)

                const definition = document.createElement('td')
                node.appendChild(definition)

                const input = document.createElement('input')
                input.addAttribute('name', id)
                input.addAttribute('type', 'text')
                input.addAttribute('id', id)
                input.addAttribute('class', 'regular-text')
                if(required) input.addAttribute('required', 'required')
                definition.appendChild(input)

                this.querySelector('.form-table tbody').appendChild(node);
            }
        }
    }
    document.addEventListener("DOMContentLoaded", () => {
        customElements.define('add-new', AddNewDialog, {extends: 'dialog'})
    });
</script>
