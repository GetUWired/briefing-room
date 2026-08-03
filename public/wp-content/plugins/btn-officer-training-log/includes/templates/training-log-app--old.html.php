<?php
include_once 'officers-add-new.html.php';
$trainingId = get_the_ID();

$search_url = add_query_arg([
    'action' => 'btn_search_officers',
    '_ajax_nonce' => wp_create_nonce( 'btn_search_officers' )
], admin_url('admin-ajax.php'));
?>

<div style="display: flex; justify-content: space-around;">
    <div>
        <h2>Attendance List</h2>
        <attendance-list
            data-training-id='<?php echo $trainingId; ?>'
        ></attendance-list>
    </div>
    <div>
        <h2>Student List</h2>
        <officer-search
            data-url="<?php echo $search_url; ?>"
            placeholder="Search for a student..."
        ></officer-search>
        <hr />
        <a href="/wp-admin/admin.php?page=briefing-room-officers.php" target="_blank">Add New Student</a>
<!--        <button id="new-officer" class="page-title-action">Add New</button>-->
    </div>
</div>

<dialog
    is="add-new"
    target="new-officer"
    data-fields='[{"id": "firstName","label": "First Name"}, {"id": "lastName","label": "Last Name"}, {"id": "emailAddress","label": "Email Address"}, {"id": "badgeId","label": "Badge ID"}]'
>
</dialog>

<script>
    class AttendanceList extends HTMLElement {
        connectedCallback() {
            const template = document.getElementById('attendance-list');
            const node = document.importNode(template.content, true);
            this.appendChild(node);
        }

        appendOfficerField() {
            return ({id, firstName, lastName}) => {
                const label = document.createElement('label');
                label.textContent = `${firstName} ${lastName}`;
                label.style.marginBottom = '5px';
                const checkbox = document.createElement('input');
                checkbox.type = 'hidden';
                checkbox.style.marginRight = '5px';
                checkbox.name = 'officers[]';
                checkbox.value = id;
                label.prepend(checkbox);
                this.querySelector('fieldset').appendChild(label);
            }
        }
    }

    class OfficerSearch extends HTMLElement {

        constructor() {
            super();

            this.url = this.getAttribute('data-url');
            this.placeholder = this.getAttribute('placeholder');
            console.log(this.searchUrl)
        }

        connectedCallback() {

            const debounce = (callback, wait) => {
                let timeoutId = null;
                return (...args) => {
                    window.clearTimeout(timeoutId);
                    timeoutId = window.setTimeout(() => {
                        callback.apply(null, args);
                    }, wait);
                };
            }

            const input = document.createElement('input');
            input.type = 'search'
            input.placeholder = this.placeholder;
            input.addEventListener('input', debounce(this.search.bind(this), 500));
            this.appendChild(input);

            const list = document.createElement('ul');
            this.appendChild(list)

            const attendaceList = document.querySelector('attendance-list');
            this.selectOfficer = attendaceList.appendOfficerField();
        }

        clearList() {
            const list = this.querySelector('ul');
            list.innerHTML = '';
        }

        updateList(officers) {
            const list = this.querySelector('ul');
            officers.forEach(({id, firstName, lastName}) => {
                const item = document.createElement('li');
                item.style.cursor = 'pointer';
                item.textContent = `${firstName} ${lastName}`;
                item.addEventListener('click', () => {
                    this.selectOfficer({id, firstName, lastName})
                    this.clearList()
                    this.querySelector("input[type='search']").value = '';
                });
                list.appendChild(item);
            });
        }

        search(event) {
            const url = new URL(this.url);
            url.searchParams.append('search', event.target.value);
            fetch(url)
            .then(response => response.json())
            .then(officers => {
                this.clearList()
                this.updateList(officers)
            });
        }
    }

    document.addEventListener("DOMContentLoaded", () => {
        customElements.define('attendance-list', AttendanceList)
        customElements.define('officer-search', OfficerSearch);
    });
</script>

<template id="attendance-list">
    <form action="/wp-admin/admin-post.php" method="post" >
        <input type="hidden" name="action" value="log_attendance">
        <input type="hidden" name="trainingId" value="<?php echo $trainingId ?>">
        <label for="duration">Duration (minutes)</label>
        <input type="text" name="duration" id="duration">
        <fieldset style="display: flex; flex-direction: column;">
            <legend>Students</legend>
        </fieldset>
        <button type="submit">Submit</button>
    </form>
</template>
