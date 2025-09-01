<div class="my-2">
    <div class="max-h-full max-w-full bg-gray-500">
        <div class="" x-data="{accordion1: false, accordion2: false}">
            <div>
                <p
                    class="flex items-center justify-between p-2"
                    x-on:click="accordion1 = !accordion1 "
                >
                    first accordian
                    <i
                        class="fa fa-chevron-left transition-all duration-[1.7s]"
                        :class="accordion1? 'rotate-[-90deg]' : ''"
                        style="font-size: 18px"
                    ></i>
                </p>
                <div
                    class="max-h-[0] overflow-hidden transition-all duration-[2s]"
                    x-bind:class="accordion1  ? 'max-h-[300px]' : ''"
                >
                    <p >
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Quas fugit sint repudiandae
                    </p>

                    <div>
                        <p
                            class="flex items-center justify-between p-2"
                            x-on:click="accordion2 = !accordion2 "
                        >
                            second accordian
                            <i
                                class="fa fa-chevron-left transition-all duration-[1.7s]"
                                :class="accordion2? 'rotate-[-90deg]' : ''"
                                style="font-size: 18px"
                            ></i>
                        </p>
                        <div
                            class="max-h-[0] transition-all overflow-hidden duration-[2s]"
                            x-bind:class="accordion2  ? 'max-h-[300px] ' : ''"
                        >
                            <p >
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Quas fugit sint repudiandae
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
