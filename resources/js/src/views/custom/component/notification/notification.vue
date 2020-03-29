<template>
    <div class="col-md-12" v-if="$root.notification.status">
        <div role="alert"
             :class="`mt-2 alert alert-${$root.notification.status} alert-dismissible display-block`"
        >
            <button type="button"
                    data-dismiss="alert"
                    aria-label="Close"
                    class="close"
                    @click="$root.emptyNotification()"
            >
                <span aria-hidden="true">×</span>
            </button>
            <i class="ace-icon fa fa-hand-o-right"></i>
            {{$root.notification.message}}
        </div>
    </div>
</template>
