<template>
        <div class="social_sharing_container">
            <div class="share_icon_wrapper">
                <v-icon @click.native="test()" class="share_icon">share</v-icon>
                <span>Partager</span>
            </div>
            <social-sharing :url="url"
                            :title="title"
                            :description="title"
                            v-if="show"
                            inline-template>
                    <div class="social_sharing_wrapper" >
                         <network network="email">
                           <img class="social_img email_img" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAADsElEQVR4nO2bTYhWVRyHn/NmhH2YNAgV9rEpswisyIIW0iKNGKxoMZRQZC36WOQm2hTugjZBbSqiIociBIUKDcaE3GS4qzEooqIUkkpMx69xxnla3PfGy/Teec/7dQ9677MaGM7///v95px7z3vOvFBTU1NTYUL+g7oIeBRYAyxNpmi4HAZ2AdtDCHPQDEBdAWwBVqfTViq7gY0hhN+DugSYBK5NLKpsJoE7G8CrVM88wK3AS0E9CixJrSYRvwTV1CoSYiO1gsTMVT2A2QawGajqMvg03wesBT4GRtLqKY1Z4EXgjdad4DXAVuDuVKpK4iAwFkL4GuC/Z0AI4QDZNvjNRMLKYAK4PTdfiDqmTnn+MKduVi+Y7zW0C6AZwk3ANuDmfmNPzN/AhhDCRLtfFr4GQwg/AHeRPRzPVfYCtxWZj0IN6rPqmYRTuBdeVy+MMbguMojV6m9pPUVxTH0k0tN6moNeMyItdUT9IpWzCL5Vb4jwsVh9Wz1Oy+Bv1OsjBjfUV9SzpdtbmPfVxRH6V5gFpXqCeUX+MX763KP+XJ6/Qg6rY5GaN6jHW8b+L4Cct4xL81KzqZSKHepVETovVt9tM74wANXv1JWRyT6g/jF4f4VMqU+rhfuYFm0r1cmCOicXCkD1hPpkZKMRdeugHC7AV0Y8q5qaHm96KKJjADkfqZdFNAzqY+qRviy255S6STsf4qiXqB9E1IwOQPUn9Y7I5Jeru7p1uAD7zLbmMb1vUb+PrHuqmwA02w2+YNySaKjPqye77NHKjPqy2aVNp35B3dhlv64DyPlMXRb5F7nR7GndLXvUVZE9Lle39NDjdK8BqP5l9rG542xoilyr7o+o+6O6vou696sHevTQVwA529UrI8UuUp9RD7Wpc8hsyXT+AJPVWmq2++uH04O6FzgCbALGQwgd66kXAQ8B9wFzZCc1n4cQpmOaqaPAO8DVPSvOODOIGdDKDnV5n6IKUa9Qxweod3rQAageVZ8ycg13Yf5h2y+dfhhKADkT6nUDML5M/WRIGge+BOYzpT5nm8PICOPB7C3z5xD1DT2AnP3qqPGvtjXq3hJ0zZQVQM4etfDiRV2l7ixRz0yq6/GdwHvAl2Qn0/cCTwAPlqxjtur/H3C26tfjxRcjVaHqAYSqB1DPgKoHUPkZUPkA6iVQB5BaQGJsAMdSq0jIrw1gPLWKhHwYzO78JoG+j6/OMbIvTIQQpoB1wL7EgspkNzAaQpiu6pemtsXcX9TU1NSc9/wLt5rfgTxzFw8AAAAASUVORK5CYII=" alt="">
                        </network>
                        <network network="facebook">
                            <img class="social_img" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjciIGhlaWdodD0iNjciIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+IDxnPiAgPHRpdGxlPmJhY2tncm91bmQ8L3RpdGxlPiAgPHJlY3QgZmlsbD0ibm9uZSIgaWQ9ImNhbnZhc19iYWNrZ3JvdW5kIiBoZWlnaHQ9IjQwMiIgd2lkdGg9IjU4MiIgeT0iLTEiIHg9Ii0xIi8+IDwvZz4gPGc+ICA8dGl0bGU+TGF5ZXIgMTwvdGl0bGU+ICA8cGF0aCBpZD0ic3ZnXzEiIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSIjZjRmN2ZjIiBkPSJtMjguMTQwMjM1LDUwLjE3MjI5NGw2Ljc0NCwwbDAsLTE2LjMyMmw0LjQ5OSwwbDAuNTk2LC01LjYyNGwtNS4wOTUsMGwwLjAwNywtMi44MTZjMCwtMS40NjYgMC4xNCwtMi4yNTMgMi4yNDQsLTIuMjUzbDIuODEyLDBsMCwtNS42MjVsLTQuNSwwYy01LjQwNSwwIC03LjMwNywyLjcyOSAtNy4zMDcsNy4zMTdsMCwzLjM3N2wtMy4zNjksMGwwLDUuNjI1bDMuMzY5LDBsMCwxNi4zMjF6bTQuMjM1LDEzLjY4Yy0xNi41NjgsMCAtMzAsLTEzLjQzMiAtMzAsLTMwYzAsLTE2LjU2OSAxMy40MzIsLTMwIDMwLC0zMHMzMCwxMy40MzEgMzAsMzBjMCwxNi41NjggLTEzLjQzMiwzMCAtMzAsMzB6Ii8+IDwvZz48L3N2Zz4=" alt="">
                        </network>
                        <network network="googleplus">
                            <img class="social_img " src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjciIGhlaWdodD0iNjciIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+IDxnPiAgPHRpdGxlPmJhY2tncm91bmQ8L3RpdGxlPiAgPHJlY3QgZmlsbD0ibm9uZSIgaWQ9ImNhbnZhc19iYWNrZ3JvdW5kIiBoZWlnaHQ9IjQwMiIgd2lkdGg9IjU4MiIgeT0iLTEiIHg9Ii0xIi8+IDwvZz4gPGc+ICA8dGl0bGU+TGF5ZXIgMTwvdGl0bGU+ICA8cGF0aCBpZD0ic3ZnXzEiIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSIjZmZmZmZmIiBkPSJtMzIuOTYzLDM1LjAwMmMxLjYwOSwtMS42MDggMS43MzQsLTMuODQ1IDEuNzM0LC01LjEwMmMwLC01LjA1MSAtMi45OSwtMTIuODc1IC04Ljc5NiwtMTIuODc1Yy0xLjgxLDAgLTMuNzcsMC45MSAtNC45LDIuMzFjLTEuMTgxLDEuNDY4IC0xLjUzMywzLjM1MyAtMS41MzMsNS4xNjJjMCw0LjcgMi43MTQsMTIuNDY1IDguNzQ2LDEyLjQ2NWMxLjczNCwwIDMuNjE5LC0wLjg1NSA0Ljc0OSwtMS45NnptLTI4Ljk2MywtMS4wMDJjMCw3LjQwNSAyLjY4MywxNC4xODQgNy4xMjksMTkuNDE1YzAuODM5LC0xLjQxIDIuMTQsLTIuNzk3IDQuMDY2LC0zLjkzN2M0LjM0OCwtMi42NjQgMTAuMjA0LC0zLjAxNyAxMy4zNywtMy4yMThjLTAuOTgsLTEuMjU3IC0yLjExMSwtMi41ODkgLTIuMTExLC00Ljc3NGMwLC0xLjE4MiAwLjM1MiwtMS44ODUgMC43MDQsLTIuNzE1Yy0wLjc3OSwwLjA3NiAtMS41MzMsMC4xNTEgLTIuMjM3LDAuMTUxYy03LjQxNCwwIC0xMS42MTEsLTUuNTI5IC0xMS42MTEsLTEwLjk4M2MwLC0zLjIxNyAxLjQ4MywtNi43OTEgNC40NzMsLTkuMzc3YzMuOTk2LC0zLjI4NCA4Ljc0NiwtMy44NDUgMTIuNTE2LC0zLjg0NWwxNC40MDEsMGwtNC40NzQsMi41MTZsLTQuMzIyLDBjMS42MDcsMS4zMjkgNC45NTEsNC4xMjcgNC45NTEsOS40NDljMCw1LjE3OCAtMi45NDEsNy42MTUgLTUuODU2LDkuOTI2Yy0wLjkzLDAuOTA2IC0xLjk2LDEuODg2IC0xLjk2LDMuNDE4YzAsMS41MzMgMS4wMywyLjM4OSAxLjgxLDMuMDE3bDIuNTEzLDEuOTZjMy4wOTIsMi41NjQgNS44ODEsNC45NTEgNS44ODEsOS43NzdjMCwzLjE4MiAtMS40ODQsNi4zNzYgLTQuMzc5LDguODI2Yy0xLjU1NywwLjI1NSAtMy4xNTMsMC4zODggLTQuNzgxLDAuMzkzYzIuOTM4LC0xLjI4OSA0LjQ2MSwtMy42NDYgNC40NjEsLTYuNDhjMCwtMy41NjggLTIuMjg3LC01LjQ1MyAtNy42MTUsLTkuMjQ4Yy0wLjU1MywtMC4wNTEgLTAuOTA1LC0wLjA1MSAtMS42MDgsLTAuMDUxYy0wLjYyOCwwIC00LjM5OCwwLjEyNyAtNy4zMzgsMS4xMDZjLTEuNTMzLDAuNTUzIC02LjAwNiwyLjIzNyAtNi4wMDYsNy4yMTNjMCwwLjU0MSAwLjA1OCwxLjA2NSAwLjE3LDEuNTY5Yy03LjM3MiwtNS40NjMgLTEyLjE0NywtMTQuMjI4IC0xMi4xNDcsLTI0LjEwOHptNTcuNzMsLTExLjQ2OGwwLDBjMC40NCwxLjA2MyAwLjgyMSwyLjE1OSAxLjEzOSwzLjI4MWMtMC4zMTcsLTEuMTIyIC0wLjY5OCwtMi4yMTcgLTEuMTM5LC0zLjI4MWwwLDBsMCwwbDAsMHptLTI3LjczLDQxLjQ2OGMtMTYuNTY4LDAgLTMwLC0xMy40MzIgLTMwLC0zMGMwLC0xNi41NjkgMTMuNDMyLC0zMCAzMCwtMzBjMTIuNTA3LDAgMjMuMjI3LDcuNjUzIDI3LjczLDE4LjUzMmwwLDBsLTUuOTY2LDBsMCwtNy44MTRsLTMuMzQ5LDBsMCw3LjgxNGwtNy44MTQsMGwwLDMuMjgxbDcuODE0LDBsMCw3Ljg4MmwzLjM0OSwwbDAsLTcuODgybDcuMTA0LDBjMC43MzcsMi42MDIgMS4xMzIsNS4zNDkgMS4xMzIsOC4xODdjMCwxNi41NjggLTEzLjQzMiwzMCAtMzAsMzB6Ii8+IDwvZz48L3N2Zz4=" alt="">
                        </network>
                        <network network="linkedin">
                            <img class="social_img" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjciIGhlaWdodD0iNjciIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+IDxnPiAgPHRpdGxlPmJhY2tncm91bmQ8L3RpdGxlPiAgPHJlY3QgZmlsbD0ibm9uZSIgaWQ9ImNhbnZhc19iYWNrZ3JvdW5kIiBoZWlnaHQ9IjQwMiIgd2lkdGg9IjU4MiIgeT0iLTEiIHg9Ii0xIi8+IDwvZz4gPGc+ICA8dGl0bGU+TGF5ZXIgMTwvdGl0bGU+ICA8cGF0aCBpZD0ic3ZnXzEiIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSIjZjdmYWZjIiBkPSJtNTAuODM3LDQ4LjEzN2wwLC0xMS43MTJjMCwtNi4yNzUgLTMuMzUsLTkuMTk1IC03LjgxNiwtOS4xOTVjLTMuNjA0LDAgLTUuMjE5LDEuOTgzIC02LjExOSwzLjM3NGwwLC0yLjg5NGwtNi43OSwwYzAuMDksMS45MTcgMCwyMC40MjcgMCwyMC40MjdsNi43OSwwbDAsLTExLjQwOGMwLC0wLjYwOSAwLjA0NCwtMS4yMTkgMC4yMjQsLTEuNjU1YzAuNDksLTEuMjIgMS42MDcsLTIuNDgzIDMuNDgyLC0yLjQ4M2MyLjQ1OCwwIDMuNDQsMS44NzMgMy40NCw0LjYxOGwwLDEwLjkyOWw2Ljc4OSwwbDAsLTAuMDAxem0tMjcuODc4LC0yMy4yMTVjMi4zNjcsMCAzLjg0MiwtMS41NyAzLjg0MiwtMy41MzFjLTAuMDQ0LC0yLjAwMyAtMS40NzUsLTMuNTI4IC0zLjc5NywtMy41MjhzLTMuODQxLDEuNTI0IC0zLjg0MSwzLjUyOGMwLDEuOTYxIDEuNDc0LDMuNTMxIDMuNzUzLDMuNTMxbDAuMDQzLDB6bTExLjA0MSwzOS4wNzhjLTE2LjU2OCwwIC0zMCwtMTMuNDMyIC0zMCwtMzBjMCwtMTYuNTY5IDEzLjQzMiwtMzAgMzAsLTMwczMwLDEzLjQzMSAzMCwzMGMwLDE2LjU2OCAtMTMuNDMyLDMwIC0zMCwzMHptLTcuNjQ2LC0xNS44NjNsMCwtMjAuNDI3bC02Ljc4OSwwbDAsMjAuNDI3bDYuNzg5LDB6Ii8+IDwvZz48L3N2Zz4=" alt="">
                        </network>
                        <network network="twitter">
                                <img class="social_img " src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjciIGhlaWdodD0iNjciIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CgogPGc+CiAgPHRpdGxlPmJhY2tncm91bmQ8L3RpdGxlPgogIDxyZWN0IGZpbGw9Im5vbmUiIGlkPSJjYW52YXNfYmFja2dyb3VuZCIgaGVpZ2h0PSI0MDIiIHdpZHRoPSI1ODIiIHk9Ii0xIiB4PSItMSIvPgogPC9nPgogPGc+CiAgPHRpdGxlPkxheWVyIDE8L3RpdGxlPgogIDxwYXRoIGlkPSJzdmdfMSIgZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGZpbGw9IiNmZmZmZmYiIGQ9Im0zOC4xNjcsMjIuNDMwNjk1Yy0yLjYxOSwwLjk1MyAtNC4yNzQsMy40MTEgLTQuMDg2LDYuMTAxbDAuMDYzLDEuMDM4bC0xLjA0OCwtMC4xMjdjLTMuODEzLC0wLjQ4NyAtNy4xNDUsLTIuMTM5IC05Ljk3NCwtNC45MTVsLTEuMzgzLC0xLjM3N2wtMC4zNTYsMS4wMTdjLTAuNzU0LDIuMjY3IC0wLjI3Miw0LjY2MSAxLjI5OSw2LjI3MWMwLjgzOCwwLjg5IDAuNjQ5LDEuMDE3IC0wLjc5NiwwLjQ4N2MtMC41MDMsLTAuMTY5IC0wLjk0MywtMC4yOTYgLTAuOTg1LC0wLjIzM2MtMC4xNDYsMC4xNDkgMC4zNTYsMi4wNzYgMC43NTQsMi44MzljMC41NDUsMS4wNiAxLjY1NSwyLjA5NyAyLjg3MSwyLjcxMmwxLjAyNywwLjQ4N2wtMS4yMTUsMC4wMjFjLTEuMTczLDAgLTEuMjE1LDAuMDIxIC0xLjA4OSwwLjQ2N2MwLjQxOSwxLjM3NyAyLjA3NCwyLjgzOSAzLjkxOCwzLjQ3NWwxLjI5OSwwLjQ0NGwtMS4xMzEsMC42NzhjLTEuNjc2LDAuOTc2IC0zLjY0NiwxLjUyNiAtNS42MTYsMS41NjdjLTAuOTQ0LDAuMDIxIC0xLjcxOSwwLjEwNiAtMS43MTksMC4xN2MwLDAuMjExIDIuNTU3LDEuMzk3IDQuMDQ0LDEuODY0YzQuNDYzLDEuMzc3IDkuNzY1LDAuNzgzIDEzLjc0NiwtMS41NjhjMi44MjksLTEuNjc0IDUuNjU3LC01IDYuOTc4LC04LjIyMWMwLjcxMywtMS43MTUgMS40MjUsLTQuODUxIDEuNDI1LC02LjM1NGMwLC0wLjk3NSAwLjA2MywtMS4xMDIgMS4yMzYsLTIuMjY3YzAuNjkyLC0wLjY3OCAxLjM0MSwtMS40MTkgMS40NjcsLTEuNjMxYzAuMjEsLTAuNDAzIDAuMTg4LC0wLjQwMyAtMC44OCwtMC4wNDNjLTEuNzgxLDAuNjM2IC0yLjAzMywwLjU1MSAtMS4xNTIsLTAuNDAyYzAuNjQ5LC0wLjY3OCAxLjQyNSwtMS45MDcgMS40MjUsLTIuMjY3YzAsLTAuMDYzIC0wLjMxNCwwLjA0MiAtMC42NzEsMC4yMzNjLTAuMzc3LDAuMjEyIC0xLjIxNSwwLjUzIC0xLjg0NCwwLjcybC0xLjEzMSwwLjM2MWwtMS4wMjcsLTAuN2MtMC41NjYsLTAuMzgxIC0xLjM2MSwtMC44MDUgLTEuNzgxLC0wLjkzMmMtMS4wNjksLTAuMjk2IC0yLjcwNCwtMC4yNTQgLTMuNjY4LDAuMDg1em0tNC4xNjcsNDEuNzE3Yy0xNi41NjgsMCAtMzAsLTEzLjQzMiAtMzAsLTMwYzAsLTE2LjU2OSAxMy40MzIsLTMwIDMwLC0zMHMzMCwxMy40MzEgMzAsMzBjMCwxNi41NjggLTEzLjQzMiwzMCAtMzAsMzB6Ii8+CiA8L2c+Cjwvc3ZnPg==" alt="">
                        </network>
                    </div>
             </social-sharing>
         </div>
</template>

<script>
export default {
    props : ['title'],
    data() {
        return {
            url : window.location.href,
            show : false,
        }
    },
    methods  : {
        test() {
            this.show = !this.show;
        }
    }
}
</script>

<style lang="scss" >
.social_sharing_wrapper {
    padding: 0 15px;;
    flex-wrap: nowrap;
    display: flex;
    align-items: center;
}
.social_img {
    width: 40px;
    cursor: pointer;
}

.social_sharing_wrapper{
    position: absolute;
    bottom: -54px;
    right: 0;
    background: #0075d8;
    border-bottom-left-radius: 20px;
    border-bottom-RIGHT-radius: 20px;
    padding: 5px 21px;
}

.share_icon {
    font-size: 34px;
    margin: 0 15px;
    cursor: pointer;
}

.share_icon_wrapper{
    display: flex;
    flex-direction: column;
    align-items: center;
    span {
        font-size: 11px;
    }
    
}

.email_img {
        width: 33px;
    margin-right: 5px;
}


</style>
