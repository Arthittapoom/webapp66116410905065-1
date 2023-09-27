import networkx as nx

# สร้างกราฟเพื่อรับข้อมูลของโครงการ
G = nx.DiGraph()

# รายการของกิจกรรมและข้อมูลเวลาที่ระยะเวลาสำรวจ (Optimistic Time), ระยะเวลาปกติ (Most Likely Time), ระยะเวลาสูงสุด (Pessimistic Time), และค่าใช้จ่ายในการเร่ง
activities = [
    ("A", 7, 6, 150),
    ("B", 8, 6, 75),
    ("C", 9, 7, 200),
    ("D", 11, 9, 125),
    ("E", 8, 5, 115),
    ("F", 10, 8, 100),
    ("G", 13, 11, 200),
    ("H", 13, 12, 100),
    ("I", 14, 10, 125),
]

# เพิ่มกิจกรรมลงในกราฟ
for activity, optimistic, most_likely, cost in activities:
    G.add_node(activity, optimistic=optimistic, most_likely=most_likely, cost=cost)

# เพิ่มเส้นเชื่อมกิจกรรมและค่าเวลา (Expected Time)
G.add_edges_from([("A", "C"), ("A", "D"), ("B", "E"), ("B", "F"), ("C", "G"), ("D", "H"), ("E", "H"), ("F", "I"), ("G", "I"), ("H", "I")])

# หา Critical Path
critical_path = nx.algorithms.dag.dag_longest_path(G, weight="most_likely")
critical_path_length = nx.algorithms.dag.dag_longest_path_length(G, weight="most_likely")

print("Critical Path:", critical_path)
print("Critical Path Length:", critical_path_length)

# คำนวณค่าคงที่ของกิจกรรมที่ต้องเร่ง
def calculate_crash_cost(G, activity, target_duration):
    current_duration = nx.single_source_dijkstra_path_length(G.reverse(), activity, weight="most_likely")
    crash_duration = current_duration - target_duration
    if crash_duration <= 0:
        return 0
    else:
        return G.nodes[activity]["cost"] * crash_duration

# คำนวณค่าคงที่ที่ต้องใช้ในการเร่งโครงการ
target_duration = 28  # ระยะเวลาที่ต้องการให้โครงการเสร็จ
total_crash_cost = sum(calculate_crash_cost(G, activity, target_duration) for activity in G.nodes)

print("Total Crash Cost:", total_crash_cost)
